<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Mail\MatchEmail;
use App\Review;

class EmailController extends Controller
{
    public function send()
    {
        $data = ([
            'name' => request()->name,
            'email' => request()->email,
            'subject' => request()->subject,
            'message' => request()->message
        ]);

        $emailto = request()->email;
    
        try{
            Mail::cc($emailto, 'developersforanymarket@gmail.com')->send(new ContactEmail($data));
                
            return back()->with('success', 'Thank you for sending email to Us');
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }
    }

    public function match()
    {
        $data = ([
            'email' => request()->userauth,
            'subject' => 'match',
            'message' => request()->message
        ]);

        $emailto = request()->useremail;
    
        
            Mail::cc($emailto, 'developersforanymarket@gmail.com')->send(new MatchEmail($data));
            
            $review = new Review();
            $userIdAuth = auth()->user()->id;
            $review->user_id =  $userIdAuth;
            $review->is_matched_id = request()->userid;
            $review->matched_status = 0;
            $review->save();

            return back()->with('success', 'You matched successfully');
        
      
    }
}
