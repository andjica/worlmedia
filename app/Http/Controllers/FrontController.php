<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;

class FrontController extends Controller
{
    private $data = [];

    public function __construct()
    {
        $this->data['categories'] = Category::orderBy('name', 'desc')->get();
        $this->data['cities'] =  City::orderBy('name', 'asc')->get();
        
        
        return $this->data;
    }
    public function index(){
        return view('pages.index');
    }

    public function services(){
        return view('pages.services');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function about(){
        return view('pages.aboutus');
    }

    public function freelancers(){
        return view('pages.freelancers');
    }

    public function profile(){
        return view('pages.profile');
    }

}

