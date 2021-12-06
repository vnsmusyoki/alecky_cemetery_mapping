@extends('admin.layout')
@section('title', 'All Sections')
@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Deceased</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/managesections') }}">Deceased</a></li>
                    <li class="breadcrumb-item active">Add Deceased</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('admin/storedeceased') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>deceased Details</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Full Names</label>
                                    <input type="text" class="form-control" name="full_names"
                                        value="{{ old('full_names') }}">
                                    @error('full_names')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Available Sections</label>
                                    <select name="location_assigned" id="" class="form-control">
                                        <option value="">select</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->location_id }}">{{ $location->location_id }} -
                                                {{ $location->locationsection->section_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('location_assigned')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Picture of deceased</label>
                                    <input type="file" class="form-control" name="picture" value="{{ old('picture') }}">
                                    @error('picture')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Next of Kin Full Names</label>
                                    <input type="text" class="form-control" name="next_kin_full_names"
                                        value="{{ old('next_kin_full_names') }}">
                                    @error('next_kin_full_names')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Next of Kin Phone Number</label>
                                    <input type="number" min="1" class="form-control" name="next_kin_phone_number"
                                        value="{{ old('next_kin_phone_number') }}">
                                    @error('next_kin_phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Deceased Home Location Address</label>
                                    <textarea name="deceased_home_location" id="" cols="30" rows="10"
                                        class="form-control">{{ old('deceased_home_location') }}</textarea>
                                    @error('deceased_home_location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-info btn-rounded">Submit New Location</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
