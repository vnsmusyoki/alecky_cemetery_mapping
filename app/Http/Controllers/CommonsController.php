<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonsController extends Controller
{
    public function index(){
        return view('pages.homepage');
    }
}
