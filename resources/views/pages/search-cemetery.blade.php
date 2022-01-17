@extends('pages.layout')
@section('title', 'Book Us')
@section('content')

<div class="banner-area">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner">
                    <h2>Search With Full Names </h2>
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
    <div class="contact-area section-space jumbotron">
        <div class="container">


            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="cotact-heading">
                        <h3>Search Grave</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <form method="POST" action="{{ url('search-grave') }}">
                    @csrf
                    <fieldset>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="First Name*" class="form-control" name="firstname">
                                @error('firstname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="Last Name*" class="form-control" name="lastname">
                                @error('lastname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn send-btn">Search Now</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Area End Here -->
@endsection
