<?php

namespace App\Http\Controllers;

use App\Models\Deceased;
use Illuminate\Http\Request;

class CommonsController extends Controller
{
    public function index()
    {
        $locations = Deceased::all();
        return view('pages.homepage', compact('locations'));
    }
    public function bookus()
    {
        return view('pages.book-us');
    }
    public function searchcemetery()
    {
        return view('pages.search-cemetery');
    }
    public function contactus()
    {
        return view('pages.contact-us');
    }
    public function deceaseddetails($deceased)
    {
        $user = Deceased::where('cemetery_id', $deceased)->get()->first();
        return view('pages.deceased-details', compact('user'));
    }
}
