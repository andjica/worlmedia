<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
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

    public function editprofile(){
        return view('pages.editprofile');
    }
}

