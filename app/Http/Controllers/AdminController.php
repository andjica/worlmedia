<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $countpurchases = Purchase::count();
        $totalearn = Purchase::sum('price');
        $countuser = User::count();

        $users = User::paginate(6);
        

        return view('pages.admin-home', compact('countpurchases', 'totalearn', 'countuser'));
    }
}
