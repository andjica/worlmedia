<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\User;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function store()
    {
        $userId = auth()->user()->id;

        $skill = new Skill();

        $skill->skill_one = request()->sk1;
        $skill->percent_one = request()->pr1;

        $skill->skill_two = request()->sk2;
        $skill->percent_two = request()->pr2;

        $skill->skill_three = request()->sk3;
        $skill->percent_three = request()->pr3;

        $skill->skill_four = request()->sk4;
        $skill->percent_four = request()->pr4;

        $skill->skill_five = request()->sk5;
        $skill->percent_five = request()->pr5;

        $skill->skill_six = request()->sk6;
        $skill->percent_six = request()->pr6;

        $skill->skill_seven = request()->sk7;
        $skill->percent_seven = request()->pr7;

        $skill->skill_eight =  request()->sk8;
        $skill->percent_eight = request()->pr8;

        $skill->skill_nine = request()->sk9;
        $skill->percent_nine = request()->pr9;

        $skill->skill_ten = request()->sk10;
        $skill->percent_ten = request()->pr10;

        $skill->user_id = $userId;
        
        $skill->save();

        return redirect()->back();
    }
}
