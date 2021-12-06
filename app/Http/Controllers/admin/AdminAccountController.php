<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MapLocation;
use App\Models\MapSection;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AdminAccountController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
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
}
