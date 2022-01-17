@extends('pages.layout')
@section('title', 'Search Results')
@section('content')

    <div class="banner-area">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner">
                        <h2> Obituary Details</h2>
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

    <div class="obituary-details-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                    <div class="obituary-details-left">
                        <img src="{{ asset('storage/pictures/' . $user->picture) }}" alt="obituary-details"
                            class="img-responsive">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                    <div class="obituary-details-right">
                        <h3>{{ $user->full_names }}</h3>
                        <span><i class="fa fa-calendar" aria-hidden="true"></i>Date of Burial -
                            {{ $user->burial_date }}</span>
                        <div class="obituary-details-right-mid">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul>
                                        <li><i class="fa fa-birthday-cake" aria-hidden="true"></i><span>Birth Date:
                                            </span>{{ $user->birth_date->format('d/m/Y') }}</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i><span>Death Date:
                                            </span>{{ $user->death_date->format('d/m/Y') }}</li>
                                        <li><i class="fa fa-home" aria-hidden="true"></i><span>Location Cordonates:
                                            </span>{{ $user->latitude}},{{ $user->longitude }}</li>

                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul>
                                        <li><i class="fa fa-gift" aria-hidden="true"></i><span>Next of Kin:
                                            </span>{{ $user->next_kin_full_names }}</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i><span>Phone Number:
                                            </span>{{ $user->next_kin_phone_number }}</li>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i><span>Burial Permit:
                                            </span>{{ $user->death_cert }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="obituary-details-right-bottom">
                            <p><span>Biography: </span>{{ $user->eulogy}}.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div id="mymap"></div>
            <script type="text/javascript">
                var locations = <?php print_r(json_encode($locations)); ?>;
                var mymap = new GMaps({
                    el: '#mymap',
                    lat: 0.1617,
                    lng: 37.7464,
                    zoom: 8
                });
                $.each(locations, function(index, value) {
                    mymap.addMarker({
                        lat: value.latitude,
                        lng: value.longitude,
                        title: value.full_names,
                        click: function(e) {


                            window.location.href = 'cemetery/' + value.cemetery_id + '';
                        }
                    });
                });
            </script>
        </div>
    </div>

@endsection
