<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'desc1' => 'max:300',
            'desc2' => 'max:300',
            'image' => 'mimes:jpeg,png,jpg,gif,svg'
        ],
        [
            'name.min' => 'Min characters for name is 3',
            'name.max' => 'Max characters for name is 30',
            'desc1.max' => 'Your description for biography is too long, max characters is 300',
            'desc2.max' => 'Your description biography two is too long, max characters is 300',
            'image.mimes' => 'Image must be in jpeg, jpg, png, gif or svg format'
        ]);

        if(request()->image)
        {
            $image = request()->file('image');
            $name = $image->getClientOriginalName();
        
            $destinationPath = public_path('/image-users');
            $image->move($destinationPath, $name);

            $user = new User();

            $user->desc_one = request()->desc1;
            $user->desc_two = request()->desc2;
            $user->url = $name;

            try{
                $user->save();

                return redirect()->back()->with('success', 'You saved changes successfully');
            }
            catch(\Throwable $e)
            {
                return abort(500);
            }
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
        //
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
    public function update(Request $request, $id)
    {
        //
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
