<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Image;

class ImageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store()
    {
        request()->validate([
            'image2' => 'mimes:jpeg,png,jpg,gif,svg',
            'imagedesc' => 'required'
        ],
        [
            'image2.mimes' => 'Image must be in jpeg, jpg, png, gif or svg format',
            'imagedesc.required' => 'Image description is nessesery for uploading image'
        ]);

        $user = auth()->user()->id;
        $alt = request()->imagedesc;

        $countuser = Image::where('user_id', $user)->count();
       
        if($countuser >= 6)
        {
            return redirect()->back()->with('error', 'Sorry, you had already uploaded 6 image');
        }
        else{
            if(request()->image2){

                $image2 = request()->file('image2');
                $name2 = $image2->getClientOriginalName();
            
                $destinationPath2 = public_path('/image-resume');
                $image2->move($destinationPath2, $name2);
    
                $imagemodel = new Image();
                $imagemodel->url = $name2;
                $imagemodel->alt = $alt;
                $imagemodel->user_id = $user;
    
                try{
                    $imagemodel->save();
                    return redirect()->back()->with('success', 'You made a new image successfully :)');
                }
                catch(\Throwable $e)
                {
                    return redirect()->back()->with('error', 'Error Message: There is a Problem Uploading Your Image, try latter');
                }
              
    
            }
        }
       

    }


    public function destroy($id)
    {
        $image = Image::find($id) ?? abort(404);
        
        

       try{

        $image_path = public_path('image-resume/'.$image->url);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $image->delete();
        return redirect()->back()->with('success', 'You deleted image successfully');

       }
       catch(\Throwable $e)
       {
           return redirect()->back()->with('error', 'Error Message: There is a Problem Deleting Your Image, try latter');
       }
        
        

        
    }
}
