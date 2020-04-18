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
    }
    public function index()
    {
        $countpurchases = Purchase::count();
        $totalearn = Purchase::sum('price');
        $countuser = User::count();

        $users = User::paginate(6);
        $cities = City::paginate(6);

        return view('pages.admin-home', compact('countpurchases', 'totalearn', 'countuser', 'users', 'cities'));
    }
}
