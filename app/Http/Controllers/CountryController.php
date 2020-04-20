<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\City;
use App\Purchase;
use App\Account;
use App\Country;

class CountryController extends Controller
{

    protected $data = [];

    public function __construct()
    {
       $this->data['countpurchases'] = Purchase::count();
       $this->data['totalearn'] = Purchase::sum('price');
       $this->data['countuser'] = User::count();

       return $this->data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::paginate(6);
        return view('pages.country.admin-countries', compact('countries'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.country.create-country', $this->data);
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
            'name_country' => 'required|min:3|unique:countries',

        ],
        [
            'name_country.required' => 'Country name is required',
            'name_country.unique' => 'Name alredy exists',
           
        ]);

        $country = new Country();
        $country->name_country = request()->name;
        

        try{
            $country->save();
            return redirect()->back()->with('success', 'You created country successfully');
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
