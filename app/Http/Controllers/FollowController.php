<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follower;

class FollowController extends Controller
{
    public function follow()
    {
        $id = request()->user;
        $userauth = auth()->user();
        $usid = $userauth->id;

        $follow = new Follower();
        $follow->user_id = $usid;
        $follow->is_following_id = $id;
        try{
            $follow->save();
            return redirect()->back()->with('success', 'You are following this user :)');
        }
        catch(\Thowrable $e)
        {
            return abort(500);
        }
        
         
    }

    public function unfollow()
    {
        $user = request()->user;
        $userauth = auth()->user()->id;

        
        
        try{
            Follower::where('user_id', $userauth)
            ->where('is_following_id', $user)
            ->delete();

            return redirect()->back();
        }
        catch(\Thowrable $e)
        {
            return abort(500);
        }
    }
}
