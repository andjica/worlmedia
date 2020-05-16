<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\User;

class ReviewController extends Controller
{

    public function match()
    {
        
    }

    public function rate()
    {
        $rate = request()->rate;
        $userid = auth()->user()->id;
        $comment = request()->comment;
        $userrated = request()->userid;

        //finding name from user profile
        $userfind = User::find($userrated);
        $username = $userfind->name;

        $review = new Review();
        $review->user_id = $userid;
        $review->is_rated_id = $userrated;
        $review->comment = $comment;
        $review->rate = $rate;

        
        $reviewone = Review::where('user_id', $userid)->where('is_rated_id', $userrated)->first();

        

        if($reviewone)
        {
            
                return redirect()->back()->with('error', 'Sorry, you have already give a rate to '.$username);
           
        }
        else
        {
            try{
                $review->save();
                return redirect()->back();
            }
            catch(\Throwable $e)
            {
                return abort(500);
            }
        }
       
    }
}
