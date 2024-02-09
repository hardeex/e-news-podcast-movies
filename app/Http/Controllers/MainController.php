<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // the index or home page
    public function index(){
        return view('home');
    }

     // the index or home page --- to be deleted
     public function base(){
        return view('base.base');
    }
    
}
