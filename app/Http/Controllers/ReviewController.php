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
        $comment = request()->comment;

        
    }
}
