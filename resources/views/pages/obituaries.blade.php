@extends('pages.layout')
@section('title', 'All Obituaries')
@section('content')

    <div class="banner-area">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner">
                        <h2>Our Obituaries</h2>
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
    <!-- Banner Area End -->
    <!-- Our Obituaries Page Area Start Here -->
    <div class="our-obituaries-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <p><span class="badge badge-dange">{{ $users->count() }} </span>Search Results found</p>
                    <div class="inner-our-obituaries">
                        <div class="row">
                            @if ($users->count() >= 1)
                                @foreach ($users as $user)
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-our-obituaries-box">
                                            <div class="media">
                                                <a class="pull-left"
                                                    href="{{ url('cemetery/' . $user->cemetery_id) }}">
                                                    <img class="media-object"
                                                        src="{{ asset('storage/pictures/' . $user->picture) }}"
                                                        style="max-height:150px;" alt="details1">
                                                </a>
                                                <div class="media-body">
                                                    <br>
                                                    <h3 class="media-heading"><a href="#">{{ $user->full_names }}</a>
                                                    </h3>
                                                    <p><i aria-hidden="true" class="fa fa-calendar"></i>Date of Burial -
                                                        {{ $user->burial_date }}</p>
                                                    <p>{{ $user->eulogy }}</p>
                                                    <a class="btn read-more-btn"
                                                        href="{{ url('cemetery/' . $user->cemetery_id) }}">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="inner-our-obituaries-box">
                                        <div class="media">
                                            <a class="pull-left" href="#">

                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="#">No Results Found for this search</a>
                                                </h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        >
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">

                </div>
            </div>
        </div>
    </div>


@endsection
