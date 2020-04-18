<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;

class AdminController extends Controller
{
    public function index()
    {
        $countpurchases = Purchase::count();
        return view('pages.admin-home');
    }
}
