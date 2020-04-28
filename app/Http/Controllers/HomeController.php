<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Country;
use App\User;
use App\Account;
use App\Purchase;

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
        
        $useraccount = Account::where('acc_type_id', 2)->where('user_id', $userId)->first();

        $useradmin = User::where('id', $userId)->where('role_id', 1)->first();

        if($useradmin)
        {
            return redirect('/admin-home');
        }

        if($useraccount)
        {
            return redirect('/editprofile');
        }
        
        return view('home');
    }

    
    public function editprofile(){

        
        $userId = auth()->user()->id;
        $user = User::where('id', $userId)->first();
        
        $purchases = Purchase::where('user_id', $userId)->get();
       
        $checkingaccount = Account::where('user_id', $userId)->first();

        $type = $checkingaccount->acc_type_id;
        
        if($type == 1)
        {
            return redirect('/home');
        }
        return view('pages.editprofile', compact('user', 'purchases'), $this->data);
    }

    public function terms(){
        return view('pages.terms');
        
    }
}
