<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function index()
    {
    	return view('home.index');
    }

    public function register()
    {
    	return view('home.register');
    }
}
