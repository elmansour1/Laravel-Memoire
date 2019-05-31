<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function home(){
    	return view('pages.home');
    }


    public function contact(){
    	return view('pages.contact');
    }
}
