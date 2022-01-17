@extends('pages.layout')
@section('title', 'Book Us')
@section('content')

    <div class="banner-area">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner">
                        <h2>Submit Your Loved One Details</h2>
                        <div class="breadcumb-area">
                            <ul>
                                <li class="breadcumb-parent"><a href="{{ url('/') }}">Home</a><span>/</span></li>
                                <li class="breadcumb-child">Obituaries</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area Start Here -->
    <div class="contact-area section-space" style="background-color: #f8f9fd;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="cotact-heading">
                        <h3>Provide the following details</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <form method="POST" action="{{ url('upload-new-burial') }}" class="booknow"
                    enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="">FIrst Name</label>
                                <input type="text" placeholder="First Name*" class="form-control" name="firstname"
                                    value="{{ old('firstname') }}">
                                @error('firstname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="Other Names">Other Names</label>
                                <input type="text" placeholder="Last Name*" class="form-control" name="other_names"
                                    value="{{ old('other_names') }}">
                                @error('other_names')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="Picture">Picture</label>
                                <input type="file" class="form-control" name="picture">
                                @error('picture')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="Picture">Sun Rise</label>
                                <input type="date" class="form-control" name="birth_date"
                                    value="{{ old('birth_date') }}">
                                @error('birth_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="Picture">Sun Set</label>
                                <input type="date" class="form-control" name="death_date"
                                    value="{{ old('death_date') }}">
                                @error('death_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="Picture">Death Cert No.</label>
                                <input type="text" class="form-control" name="death_cert"
                                    value="{{ old('death_cert') }}">
                                @error('death_cert')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="Picture">Burial Date</label>
                                <input type="date" class="form-control" name="burial_date"
                                    value="{{ old('burial_date') }}">
                                @error('burial_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Obituary/ Eulogy</label>
                                <textarea name="eulogy" id="" class="form-control" cols="30" rows="10"
                                    placeholder="Write the Obituary or Eulogy here">{{ old('eulogy') }}</textarea>
                                @error('eulogy')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <h6>Next of Kin </h6>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="Picture">Full Names</label>
                                <input type="text" class="form-control" name="next_kin_names"
                                    value="{{ old('next_kin_names') }}">
                                @error('next_kin_names')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="Picture">Phone Number</label>
                                <input type="number" class="form-control" name="next_phone_number"
                                    value="{{ old('next_phone_number') }}">
                                @error('next_phone_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn send-btn">Submit Details</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Area End Here -->
@endsection
