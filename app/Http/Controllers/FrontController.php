<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\User;
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

        return view('pages.index', $this->data);
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

        $users = User::paginate(6);
        
        $category = request()->categorysearch;
        $city = request()->citysearch;
        
        $usersfilter = User::where('category_id', $category)
                ->where('city_id', $city)
                ->paginate(6);

        $categoryname = Category::where('id', $category)->first();
        $cityname = City::where('id', $city)->first();
        
        $andjela = User::where('category_id', $category)
                    ->where('city_id', $city)
                    ->count();

        
        if($category && $city)
        {
            return view('pages.freelancers', compact('users','usersfilter', 'andjela', 'categoryname', 'cityname'), $this->data);
        }
        else
        {
            return view('pages.freeall', compact('users','usersfilter', 'andjela', 'categoryname', 'cityname'), $this->data);
        }
        
    }



    public function profile($id){
        
        $user = User::find($id);
       
        
        return view('pages.profile', compact('user'));
    }

}

