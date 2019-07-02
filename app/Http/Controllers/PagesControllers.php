<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function home(){
    	return view('pages.home');
    }

    public function authentication(){
    	return view('authentication');
    }

    public function contact(){
    	return view('pages.contact');
    }
}
