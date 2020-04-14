<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;

use App\Account;
use App\Purchase;


class PaymentController extends Controller
{
    private $_api_context;
    // private $price_pro;
    // private $price_super;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

    }

    public function activepro(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Upgraded account to Pro WorldMediaCrew')
            ->setCurrency('EUR')
            ->setQuantity(1)
            ->setPrice('600.00'); 

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('EUR')
            ->setTotal('600.00');

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Upgrading your account to Pro at WorldMediaCrew');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status-pro'))
            ->setCancelUrl(URL::to('status-pro'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
           
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/home');

            } else {

                \Session::put('error', 'Some error occured, sorry for inconvenience');
                return Redirect::to('/home');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            
            return Redirect::away($redirect_url);

        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('/home');

    }

    public function statuspro()
    {
        $payment_id = Session::get('paypal_payment_id');

    
       
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {

            \Session::put('error', 'Payment failed');
            return Redirect::to('/home');

        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

   
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            \Session::put('success', 'Payment success, you upgraded your account to Super - Pro');
            
            $userId = auth()->user()->id;

            $account = Account::where('user_id', $userId)->first();
            $account->acc_type_id = 2;
            $account->valid_until = \Carbon\Carbon::now()->addMonth(12);
            $account->save();

            $purchase = new  Purchase();
            $purchase->user_id = $userId;
            $purchase->acc_type_id = 2;
            $purchase->price = 600;
            $purchase->date_of_purcase = \Carbon\Carbon::now();
            $purchase->valid_until = \Carbon\Carbon::now()->addMonth(12);
            $purchase->save();

            return Redirect::to('/editprofile');

        }

        \Session::put('error', 'Payment failed');
        return Redirect::to('/home');
    }


}
