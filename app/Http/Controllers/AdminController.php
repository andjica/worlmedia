<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use App\User;
use App\City;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->data['countpurchases'] = Purchase::count();
        $this->data['totalearn'] = Purchase::sum('price');
        $this->data['countuser'] = User::count();

        return $this->data;
    }
    public function index()
    {
   
        $users = User::where('city_id', '!=', 'null')
        ->where('category_id', '!=', 'null')
        ->orderBy('id', 'desc')
        ->paginate(6);
        $cities = City::paginate(6);

        return view('pages.admin-home', compact('users', 'cities'), $this->data);
    }

    public function users()
    {
        
        $users = User::where('city_id', '!=', 'null')
        ->where('category_id', '!=', 'null')
        ->orderBy('id', 'desc')
        ->paginate(6);

        $cities = City::paginate(6);

        return view('pages.purchases.users', compact('users', 'cities'), $this->data);
    }

    public function invoice($id)
    {
        $user = User::find($id) ?? abort(404);
       
        $invoices = $user->purschases;

        return  view('pages.purchases.invoices', compact('invoices'), $this->data);
    }
}
