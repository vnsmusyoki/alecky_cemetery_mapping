<?php

namespace App\Http\Controllers;

use App\Models\Deceased;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

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
    public function obituaries()
    {
        $users = Deceased::all();
        return view('pages.obituaries', compact('users'));
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
    public function uploadburial(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|string|max:191',
            'other_names' => 'required|string|max:191',
            'next_kin_names' => 'required|string',
            'next_phone_number' => 'required|digits:10',
            'death_cert' => 'required|string|min:7|max:7|unique:deceaseds',
            'burial_date' => 'required|after_or_equal:death_date',
            'birth_date' => 'required|before_or_equal:' . Carbon::today(),
            'death_date' => 'required|after_or_equal:birth_date',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048',
            'eulogy' => 'required|string'
        ]);
        $fullnames = $request->input('firstname') . " " . $request->input('other_names');
        $cemeteryid = 10;
        $str = "1234567890OPUJHBGVFDESWAQZUYTB";
        $cemetery = substr(str_shuffle($str), 0, $cemeteryid);
        $deceased = new Deceased;
        $deceased->full_names = $fullnames;
        $deceased->eulogy = $request->input('eulogy');
        $deceased->burial_date = $request->input('burial_date');
        $deceased->birth_date = $request->input('birth_date');
        $deceased->death_cert = $request->input('death_cert');
        $deceased->death_date = $request->input('death_date');
        $deceased->next_kin_full_names = $request->input('next_kin_names');
        $deceased->next_kin_phone_number = $request->input('next_phone_number');
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('pictures', $filenameToStore, 'public');
        $deceased->picture = $filenameToStore;
        $deceased->cemetery_id = $cemetery;
        $deceased->save();
        Toastr::success('Deceased details added successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
