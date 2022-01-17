<?php

namespace App\Http\Controllers;

use App\Models\Deceased;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommonsController extends Controller
{
    public function index()
    {
        $locations = Deceased::all();
        $users = DB::table('deceaseds')->inRandomOrder()
            ->limit(8)
            ->get();
        return view('pages.homepage', compact('locations', 'users'));
    }
    public function bookus()
    {
        return view('pages.book-us');
    }
    public function searchcemetery()
    {
        $locations = Deceased::all();
        return view('pages.search-cemetery', compact('locations'));
    }
    public function searchgrave(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|string|min:2',
            'lastname' => 'required|string|min:2',
        ]);
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');

        $fullname = $firstname . " " . $lastname;


        return redirect('search-results-list/' . $fullname);
    }
    public function searchgraveresults($name)
    {
        $locations = Deceased::all();
        $users = DB::table('deceaseds')->where('full_names', 'LIKE', "%{$name}%")->get();
        return view('pages.search-results-list', compact('users', 'name', 'locations'));
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
    public function cemeterydetails($name)
    {
        $user = Deceased::where('cemetery_id', $name)->get()->first();
        // $locations = Deceased::all();
        $locations = Deceased::where('cemetery_id', $name)->get();
        // dd($locations);
        return view('pages.deceased-details', compact(['user', 'locations']));
    }
}
