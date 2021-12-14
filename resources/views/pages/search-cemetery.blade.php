@extends('pages.layout')
@section('title', 'Book Us')
@section('content')
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
                <form>
                    <fieldset>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="First Name*" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="Last Name*" class="form-control">
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
