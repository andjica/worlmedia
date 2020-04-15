<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Country;
use App\User;

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
        return view('home');
    }

    
    public function editprofile(){

        $user = auth()->user();
        $userId = auth()->user()->id;
        $user = User::where('id', $userId)->first();
        
        return view('pages.editprofile', compact('user'), $this->data);
    }
}
