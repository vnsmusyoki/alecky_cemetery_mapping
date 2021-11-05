<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonsController extends Controller
{
    public function index(){
        return view('pages.homepage');
    }
    public function bookus(){
        return view('pages.book-us');
    }
    public function aboutus(){
        return view('pages.about-us');
    }
    public function contactus(){
        return view('pages.contact-us');
    }
}
