@extends('admin.layout')
@section('title', 'All Sections')
@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Sections</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/managesections') }}">Sections</a></li>
                    <li class="breadcrumb-item active">Add Section</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('admin/storesection') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Section Details</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Section Name</label>
                                    <input type="text" class="form-control" name="section_name"
                                        value="{{ old('section_name') }}">
                                    @error('section_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Slots Available</label>
                                    <input type="number" min="1" class="form-control" name="slots_available"
                                        value="{{ old('slots_available') }}">
                                    @error('slots_available')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Slots Available</label>

                                        <textarea name="location" id="" cols="30" rows="10" class="form-control">{{ old('location') }}</textarea>
                                    @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-info btn-rounded">Submit New Section</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
