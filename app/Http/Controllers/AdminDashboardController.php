<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    // the admin home page
    public function index()
    {
        return view('admin.dashboard');
    }
}
