<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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

        $section = new MapSection;
        $section->section_name = $request->input('section_name');
        $section->slots_available = $request->input('slots_available');
        $section->location = $request->input('location');
        $section->save();
        Toastr::error('You have added a new section successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/managesections');
    }
}
