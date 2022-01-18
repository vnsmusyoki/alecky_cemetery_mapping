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
                    <form action="{{ url('admin/storedeceased') }}" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Deceased Details</span></h5>
                            </div>
                            <div class="col-12 col-sm-12">
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
                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Latitude</label>
                                            <input type="number" min="0.3557" max="5" class="form-control" name="latitude"
                                                step="any" value="{{ old('latitude') }}">
                                            @error('latitude')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Longitude</label>
                                            <input type="number" min="37.009" max="45" class="form-control"
                                                name="longitude" step="any" value="{{ old('longitude') }}">
                                            @error('longitude')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="col-12 col-sm-12">

                                <div class="form-group">
                                    <label>Death Certifite Number</label>
                                    <input type="text" class="form-control" name="death_cert"
                                        value="{{ old('death_cert') }}">
                                    @error('death_cert')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">

                                <div class="form-group">
                                    <label>Date of Burial</label>
                                    <input type="date" class="form-control" name="burial_date"
                                        value="{{ old('burial_date') }}">
                                    @error('burial_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Sun Rise</label>
                                            <input type="date" class="form-control" name="birth_date" step="any"
                                                value="{{ old('birth_date') }}">
                                            @error('birth_date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>SunSet</label>
                                            <input type="date" class="form-control" name="death_date" step="any"
                                                value="{{ old('death_date') }}">
                                            @error('death_date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Euology</label>
                                    <textarea name="eulogy" id="" cols="30" rows="10"
                                        class="form-control">{{ old('eulogy') }}</textarea>
                                    @error('eulogy')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-info btn-rounded">Submit New Details</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
