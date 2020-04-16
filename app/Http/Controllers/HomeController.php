<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Country;
use App\User;
use App\Account;

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
        
        if($useraccount)
        {
            return redirect('/editprofile');
        }
        return view('home');
    }

    
    public function editprofile(){

        $user = auth()->user();
        $userId = auth()->user()->id;
        $user = User::where('id', $userId)->first();
        
        return view('pages.editprofile', compact('user'), $this->data);
    }
}
