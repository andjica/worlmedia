<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
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

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
        request()->validate([
            'name' => 'min:3|max:30',
            'desc1' => 'max:450',
            'desc2' => 'max:450',
            'desc3' => 'max:450',
            'image' => 'mimes:jpeg,png,jpg,gif,svg'
           
        ],
        [
            'name.min' => 'Min characters for name is 3',
            'name.max' => 'Max characters for name is 30',
            'desc1.max' => 'Your description for biography is too long, max characters is 450',
            'desc2.max' => 'Your description biography is too long, max characters is 450',
            'desc3.max' => 'Your description equipment to is too long, max characters is 450',
            'image.mimes' => 'Image must be in jpeg, jpg, png, gif or svg format'
            
        ]);

            
            $userId = auth()->user()->id;

            $user = User::where('id', $userId)->first();
            
            $user->name = request()->username;
            $user->desc_one = request()->desc1;
            $user->desc_two = request()->desc2;
            $user->desc_three = request()->desc3;

            
    
           
            if(request()->image){

                $current = time();
                $image = request()->file('image');
                $name = $current.str_slug(request()->username).'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/image-users');
                $image->move($destinationPath, $name);
              
                try{
                   
                    //delete current image
                    $image_path = public_path('image-users/'.$user->url);
                    if(File::exists($image_path)) {
                        File::delete($image_path);
                    }
                    //save new one 

                    $user->url = $name;
                    $user->save();
    
                    return redirect()->back()->with('success', 'You saved changes successfully');
                }
                    
                catch(\Throwable $e)
                {
                    return redirect()->back()->with('error', 'Error Message: There is a Problem Uploading Your Image, try latter');
                }
            }
            else{
                    $user->save();
    
                    return redirect()->back()->with('success', 'You saved changes successfully');
            }
            
        

    }

    public function storeinfo()
    {
        /*request()->validate([
            'link' => 'url'
        ],
        [
            'url.link' => 'must be a link'
        ]);*/

        $userId = auth()->user()->id;

        $user = User::find($userId);

        
        $user->category_id = request()->categoryid;
        $user->city_id = request()->cityid;
        $user->link = request()->link;
        $user->mobile = request()->mobile;   
       
        try{
            $user->save();
            return redirect()->back()->with('success', 'You saved changes successfully');

        }
        catch(\Throwable $e)
        {
            return redirect()->back()->with('error', 'Oops, something went wrong, try latter');
        }
        
        
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userId = auth()->user()->id;
        $user = User::find($userId);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $userId = auth()->user()->id;
        $user = User::find($userId);
        
        $user->password = Hash::make(request()->password);
        try{
            $user->save();
            return redirect()->back()->with('success', 'You changed password successfully');

        }
        catch(\Throwable $e)
        {
            return redirect()->back()->with('error', 'Oops, something went wrong, try latter');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
