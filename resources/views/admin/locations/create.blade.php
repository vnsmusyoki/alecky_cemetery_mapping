@extends('admin.layout')
@section('title', 'All Sections')
@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Location</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/managesections') }}">Locations</a></li>
                    <li class="breadcrumb-item active">Add Location</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('admin/storelocations') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Location Details</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Location ID</label>
                                    <input type="number" min="1" class="form-control" name="location_id"
                                        value="{{ old('location_id') }}">
                                    @error('location_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Section Assigned</label>
                                    <select name="section_id" id="" class="form-control">
                                        <option value="">select</option>
                                        @foreach ($sections as $section)
                                            <option value="{{ $section->id }}">{{ $section->section_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('section_id')
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
