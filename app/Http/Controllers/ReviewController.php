<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\User;

class ReviewController extends Controller
{


    public function rate()
    {


        $rate = request()->rate;
        $userid = auth()->user()->id;
        $comment = request()->comment;
        $usermatched = request()->userid;

        //finding name from user profile
        $userfind = User::find($usermatched);
        $username = $userfind->name;

        
        $review = Review::where('user_id', $userid)->update([
            'comment' => $comment,
            'rate' => $rate,
            'matched_status' => 1
        ]);
        
        try{
            return redirect()->back()->with('success', 'You gave a rate to '.$username.' successfully :)');

        }
        catch(\Throwable $e)
        {
            return redirect()->back()->with('error', 'Ops :( , something went wrong, please try latter');
        } 
           
        
       
    }
}
