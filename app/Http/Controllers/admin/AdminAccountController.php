<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Deceased;
use App\Models\MapLocation;
use App\Models\MapSection;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class AdminAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $deceased = Deceased::all();
        $locations = MapLocation::all();
        $sections = MapSection::all();
        return view('admin.dashboard', compact(['sections', 'locations', 'deceased']));
    }
    public function addnewlocation()
    {
        $sections = MapSection::all();
        return view('admin.locations.create', compact('sections'));
    }
    public function storelocations(Request $request)
    {
        $this->validate($request, [
            'location_id' => 'required|numeric|min:1',
            'section_id' => 'required|string',
        ]);
        $location = $request->input('location_id');
        $section = $request->input('section_id');
        $checklocation = MapLocation::where(['location_id' => $location, 'section_id' => $section])->get()->first();
        if ($checklocation == null) {
            $addlocation = new MapLocation;
            $addlocation->section_id = $section;
            $addlocation->location_id = $location;
            $addlocation->status = "available";
            $addlocation->deceased_id = null;
            $addlocation->save();
            Toastr::success('Map Location added successfully.', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->to('admin/all-locations');
        } else {
            Toastr::error('Map Location Already exists.', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->to('admin/all-locations');
        }
        $section = new MapSection;
    }

    public function alllocations()
    {
        $locations = MapLocation::all();
        return view('admin.locations.all-locations', compact('locations'));
    }
    public function adddeceased()
    {
        $locations = MapLocation::where('status', 'available')->get();
        return view('admin.deceased.create-deceased', compact('locations'));
    }
    public function storedeceased(Request $request)
    {

        $this->validate($request, [
            'full_names' => 'required|string|max:191',
            'latitude' => 'required|numeric|min:0|max:5',
            'longitude' => 'required|numeric|min:37|max:45',
            'next_kin_full_names' => 'required|string',
            'next_kin_phone_number' => 'required|digits:10',
            'death_cert' => 'required|string|min:7|max:7|unique:deceaseds',
            'burial_date' => 'required|after_or_equal:death_date',
            'birth_date' => 'required|before_or_equal:' . Carbon::today(),
            'death_date' => 'required|after_or_equal:birth_date',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048',
            'eulogy' => 'required|string'
        ]);
        $cemeteryid = 10;
        $str = "1234567890OPUJHBGVFDESWAQZUYTB";
        $cemetery = substr(str_shuffle($str), 0, $cemeteryid);
        $deceased = new Deceased;
        $deceased->full_names = $request->input('full_names');
        $deceased->eulogy = $request->input('eulogy');
        $deceased->burial_date = $request->input('burial_date');
        $deceased->next_kin_full_names = $request->input('next_kin_full_names');
        $deceased->next_kin_phone_number = $request->input('next_kin_phone_number');
        $deceased->latitude = $request->input('latitude');
        $deceased->longitude = $request->input('longitude');
        $deceased->burial_date = $request->input('burial_date');
        $deceased->birth_date = $request->input('birth_date');
        $deceased->death_cert = $request->input('death_cert');
        $deceased->death_date = $request->input('death_date');
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('pictures', $filenameToStore, 'public');
        $deceased->picture = $filenameToStore;
        $deceased->cemetery_id = $cemetery;
        $deceased->status = "confirmed";
        $deceased->save();
        Toastr::success('Deceased details added successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/all-deceased');
    }
    public function alldeceased()
    {
        $users = Deceased::all();
        return view('admin.all-deceased', compact('users'));
    }
    public function deceasededtails($userid)
    {
        $locations = Deceased::findOrFail($userid);
        $user = Deceased::findOrFail($userid);
        return view('admin.deceased-details', compact('user', 'locations'));
    }
    public function pendingmappings()
    {
        $users = Deceased::where('status', 'waiting')->get();
        return view('admin.new-requests', compact('users'));
    }
    public function uploadcemetery(Request $request, $user)
    {
        $this->validate($request, [
            'latitude' => 'required|numeric|min:0.00|max:1.99',
            'longitude' => 'required|numeric|min:36|max:38.99',
        ]);
        $grave = Deceased::findOrFail($user);
        $grave->latitude = $request->input('latitude');
        $grave->longitude = $request->input('longitude');
        $grave->status = "confirmed";
        $grave->save();
        Toastr::success('Deceased details added successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/all-deceased');
    }
}
