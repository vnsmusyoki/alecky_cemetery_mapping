@extends('Admin.layout')
@section('title', 'Admin Account Security')
@section('content')
    <div class="card card-form">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Update Account Settings</h4>

                    </div>
                    <div class="tab-inn">
                        <form method="POST" action="{{ url('admin/update-password') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="input-field col s6">
                                    <label for="fnames">Password</label></label>
                                    <input id="fnames" type="password" class="form-control" name="password"
                                        value="{{ old('password') }}">

                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s6">
                                    <label for="othernaes">Confirm Password</label></label>
                                    <input id="othernaes" type="password" class="form-control"
                                        name="password_confirmation" value="{{ old('password_confirmation') }}">

                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="submit" class="btn btn-primary btn-sm mt-3" value="Update Password">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-form">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Update Account Email Address</h4>

                    </div>
                    <div class="tab-inn">
                        <form method="POST" action="{{ url('admin/update-email') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <label for="fnames">Email Address</label></label>
                                    <input id="fnames" type="text" class="form-control" name="email"
                                        value="{{ old('email') }}">

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="submit" class="btn btn-primary btn-sm mt-3"
                                        value="Update Email Address">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-form">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Update Account Profile</h4>

                    </div>
                    <div class="tab-inn">
                        <form method="POST" action="{{ url('admin/update-avatar') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <label for="fnames">profile Picture</label></label>
                                    <input id="fnames" type="file" class="form-control" name="picture"
                                        value="{{ old('picture') }}">

                                    @error('picture')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="submit" class="btn btn-primary btn-sm mt-3"
                                        value="Update Profile Picture">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
