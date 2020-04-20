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

        
        return view('pages.admin-cities',compact( 'users', 'cities'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        
        return view('pages.add-city', compact('countries'),$this->data);
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

        $city->save();
        return redirect()->back()->with('success', 'You created city successfully');
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
        return $id;
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
