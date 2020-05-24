<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Country;
use App\User;
use App\Account;
use App\Purchase;
use App\Skill;
use App\Image;

class HomeController extends Controller
{

    private $data = [];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->data['categories'] = Category::orderBy('name', 'desc')->get();
        $this->data['cities'] =  City::with('country')->get()->sortByDesc('country.name_country');
        
        return $this->data;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = auth()->user()->id;
        
        $freeAccount =  Account::where('acc_type_id', 1)->where('user_id', $userId)->first();
        $useraccountPro = Account::where('acc_type_id', 2)->where('user_id', $userId)->first();
        $useraccountSuperPro = Account::where('acc_type_id', 3)->where('user_id', $userId)->first();

        $useradmin = User::where('id', $userId)->where('role_id', 1)->first();

        $currentUser = Account::where('user_id', $userId)->first();
        
        $accountValidTime = $currentUser->valid_until;
        $currentTime = \Carbon\Carbon::now();
        
        
        if($useradmin)
        {
            return redirect('/admin-home');
        }

        elseif($freeAccount || $useraccountPro || $useraccountSuperPro)
        {
            if($currentTime > $accountValidTime)
            {
                return view('home');
            }
            else
            {
                return redirect('/editprofile');
            }
           
        }
        return view('home');
    }

    
    public function editprofile(){

        
        $userId = auth()->user()->id;
        $user = User::where('id', $userId)->with('skill')->first();
        
        

        $purchases = Purchase::where('user_id', $userId)->get();
       
        $checkingaccount = Account::where('user_id', $userId)->first();
        
        $accountValidTime = $checkingaccount->valid_until;
        $currentTime = \Carbon\Carbon::now();

        $type = $checkingaccount->acc_type_id;
        
       
        $skill = Skill::where('user_id', $userId)->first();

        $images = Image::where('user_id', $userId)->get();

     

      /*  if($type == 1)
        {
            return redirect('/home');
        }*/

        if($currentTime > $accountValidTime)
        {
            return view('home');
        }
        else
        {
            return view('pages.editprofile', compact('user', 'purchases', 'skill', 'images', 'checkingaccount'), $this->data);
        }
       

        
    }

    public function terms(){
        return view('pages.terms');
        
    }
}
