<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Deceased;
use App\Models\MapLocation;
use App\Models\MapSection;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AdminAccountController extends Controller
{
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
            'location_assigned' => 'required',
            'next_kin_full_names' => 'required|string',
            'next_kin_phone_number' => 'required|digits:10',
            'deceased_home_location' => 'required|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048'
        ]);

        $deceased = new Deceased;
        $deceased->full_names = $request->input('full_names');
        $deceased->location_assigned = $request->input('location_assigned');
        $deceased->next_kin_full_names = $request->input('next_kin_full_names');
        $deceased->next_kin_phone_number = $request->input('next_kin_phone_number');
        $deceased->deceased_home_location = $request->input('deceased_home_location');
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('pictures', $filenameToStore, 'public');
        $deceased->picture = $filenameToStore;
        $deceased->save();
        Toastr::success('Deceased details added successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/dashboard');
    }
}
