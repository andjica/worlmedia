<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function store()
    {
        request()->validate([
            'image2' => 'mimes:jpeg,png,jpg,gif,svg'
        ],
        [
            'image2.mimes' => 'Image must be in jpeg, jpg, png, gif or svg format'
        ]);


    }
}
