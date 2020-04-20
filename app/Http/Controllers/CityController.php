<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\City;
use App\Purchase;
use App\Account;
use App\Country;

class CityController extends Controller
{

    protected $data = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function __construct()
     {
        $this->data['countpurchases'] = Purchase::count();
        $this->data['totalearn'] = Purchase::sum('price');
        $this->data['countuser'] = User::count();

        return $this->data;
     }
    
    public function index()
    {
        
        $users = User::paginate(6);
        $cities = City::paginate(6);

        
        return view('pages.city.admin-cities',compact( 'users', 'cities'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        
        return view('pages.city.add-city', compact('countries'),$this->data);
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
            'name' => 'required|min:3|unique:cities',
            'countries' => 'required'
        ],
        [
            'name.required' => 'City is required',
            'name.unique' => 'Name alredy exists',
            'countries.required' => 'Country is required field'
        ]);

        $city = new City();
        $city->name = request()->name;
        $city->country_id = request()->countries;

        try{
            $city->save();
            return redirect()->back()->with('success', 'You created city successfully');
        }
        catch(\Throwable $e)
        {
            return abort(500);
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = City::find($id) ?? abort(404);
        $countries = Country::all();
        return view('pages.city.edit-city', compact('countries', 'city'),$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        
        $city = City::find($id) ?? abort(404);

        $city->country_id = request()->countries;
        $city->name = request()->name;

        
        try{
            $city->save();
            return redirect()->back()->with('success', 'You update city successfully');
        }
        catch(\Throwable $e)
        {
            return abort(500);
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
