<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
    	return view('home');
    }
    public function produtos(){
    	return view('produtos');
    }
    public function contato(){
       
       return view('contato');
    }
    public function catalago(){
    	return view('catalago');
    }
}
