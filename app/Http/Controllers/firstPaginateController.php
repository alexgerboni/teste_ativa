<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstPaginateController extends Controller
{
    public function first(){
    	return view('home');
    }
}
