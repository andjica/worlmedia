<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\User;
use App\Review;
use App\Skill;
use App\Follower;
use App\Image;

class FrontController extends Controller
{
    private $data = [];

    public function __construct()
    {
        //$this->middleware('auth');
        $this->data['categories'] = Category::orderBy('name', 'desc')->get();
        $this->data['cities'] =  City::orderBy('name', 'asc')->get();
        
        
        return $this->data;
    }
    public function index(){

        $usersfirstrandom = User::where('city_id', '!=', 'null')
                    ->where('category_id', '!=', 'null')
                    ->inRandomOrder()->limit(4)->get();

        $userssecondrandom = User::where('city_id', '!=', 'null')
                    ->where('category_id', '!=', 'null')
                    ->inRandomOrder()->limit(4)->get();

        return view('pages.index', compact('usersfirstrandom', 'userssecondrandom'), $this->data);
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

       
        $category = request()->categorysearch;
        $city = request()->citysearch;
        
        $usersfilter = User::where('category_id', $category)
                ->where('city_id', $city)
                ->orderBy('created_at', 'desc')
                ->paginate(6);

        $categoryname = Category::where('id', $category)->first();
        $cityname = City::where('id', $city)->first();
        
        $andjela = User::where('category_id', $category)
                    ->where('city_id', $city)
                    ->count();

        
        if($category && $city)
        {
            return view('pages.freelancers', compact('usersfilter', 'andjela', 'categoryname', 'cityname'), $this->data);
        }
        else
        {
            return abort(404);
        }
        
    }

    public function all()
    {
        $users = User::where('city_id', '!=', 'null')
        ->where('category_id', '!=', 'null')
        ->orderBy('created_at', 'desc')
        ->paginate(6);
        
        return view('pages.freeall', compact('users'), $this->data);
    }



    public function profile($id){
        
        $user = User::find($id) ?? abort(404);
        $userId = $user->id;

        $skill = Skill::where('user_id', $userId)->first();
        
        $countfollowing = Follower::where('user_id', $userId)->count();
        $following = $user->followings;

        
        $countfollowers = Follower::where('is_following_id', $userId)->count();
        $followers = Follower::where('is_following_id', $userId)->get();
        
        $images = Image::where('user_id', $userId)->get();

        return view('pages.profile', compact('user', 'skill','countfollowing','countfollowers', 'followers', 'following', 'images'));
        
    }

    public function contact()
    {
        return view('pages.contact-us');
    }

}

