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
        $userid = request()->userid;
        
        $review = new Review();
        
        $review->user_id = $userid;
        $review->user_respond = 1;
        $review->comment = "andjica daje komentare";
        $review->rate = $rate;

        try{
            $review->save();
            return redirect()->back()->with('success', 'Thank for giving rate');
        }
        catch(\Throwable $e)
        {
            return redirect()->back()->with('error', 'Oops, something went wrong, try latter');
        }
    }
}
