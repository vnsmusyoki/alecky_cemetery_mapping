@extends('admin.layout')
@section('title', 'Deceased details')
@section('content')
    <div class="container card">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                <img src="{{ asset('storage/pictures/' . $user->picture) }}" alt="obituary-details" class="img-fluid">
            </div>
            <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12" style="padding:2rem .5rem;">
                <div class="obituary-details-right">
                    <h3>{{ $user->full_names }}</h3>
                    <span><i class="fa fa-calendar" aria-hidden="true"></i>Date of Burial -
                        {{ $user->burial_date }}</span>
                    <br />
                    <div class="obituary-details-right-mid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <ul>
                                    <li><i class="fa fa-birthday-cake" aria-hidden="true"></i><span>Birth Date:
                                        </span>{{ $user->birth_date->format('d/m/Y') }}</li>
                                    <br />
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i><span>Death Date:
                                        </span>{{ $user->death_date->format('d/m/Y') }}</li>
                                    <br />
                                    <li><i class="fa fa-home" aria-hidden="true"></i><span>Location Cordonates:
                                        </span>{{ $user->latitude }},{{ $user->longitude }}</li>

                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <ul>
                                    <li><i class="fa fa-gift" aria-hidden="true"></i><span>Next of Kin:
                                        </span>{{ $user->next_kin_full_names }}</li>
                                    <br />
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i><span>Phone Number:
                                        </span>{{ $user->next_kin_phone_number }}</li>
                                    <br />
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i><span>Burial Permit:
                                        </span>{{ $user->death_cert }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="obituary-details-right-bottom">
                        <p><span>Biography: </span>{{ $user->eulogy }}.</p>

                    </div>
                    <hr>
                    @if ($user->status == 'waiting ')
                        <form action="{{ url('admin/upload-deceased-grave/' . $user->id) }}" method="POST">
                            @csrf
                            <h6>Allocate cemetery position</h6>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Latitude</label>
                                        <input type="text" name="latitude" class="form-control" placeholder="Use values ">
                                        @error('latitude')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Longitude</label>
                                        <input type="text" name="longitude" class="form-control"
                                            placeholder="Use values ">
                                        @error('longitude')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger mt-4">Save Details</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    @endif
                </div>
            </div>
        </div>
        <hr>
        <div id="mymap"></div>
        <style type="text/css">
            #mymap {

                width: 100%;
                height: 500px;
            }

        </style>
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
@endsection
