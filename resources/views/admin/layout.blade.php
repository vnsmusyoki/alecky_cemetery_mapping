<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Cemetery Mapping - @yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('backend/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/toastr.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
    <style type="text/css">
        #mymap {

            width: 100%;
            height: 500px;
        }

        .container-clossure {
            font-family: "Lato", Arial, sans-serif;
            line-height: 1.8;
            font-weight: normal;
            background: #f8f9fd;
            color: gray;
            height: 100vh;
            padding: 7rem 0;
        }

        .card-form {
            width: 100%;
            min-height: 30vh;
            border-radius: 8px;
            position: relative;
            background: #fff;
            border-radius: 10px;
            padding: 2rem 1rem;
            -webkit-box-shadow: 0px 10px 34px -15px rgb(0 0 0 / 24%);
            -moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
            box-shadow: 0px 10px 34px -15px rgb(0 0 0 / 24%);
        }

    </style>
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="{{ route('admin') }}" class="logo">
                    <img src="{{ asset('backend/img/logo-1.png') }}" alt="Logo">
                </a>
                <a href="{{ route('admin') }}" class="logo logo-small">
                    <img src="{{ asset('backend/img/logo-1.png') }}" alt="Logo" width="30" height="30">
                </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img">

                            @if (Auth::user()->picture == null)
                                <img class="rounded-circle" src="{{ asset('backend/img/profiles/avatar-01.jpg') }}"
                                    width="31" alt="Ryan Taylor">
                            @else

                                <img class="rounded-circle"
                                    src="{{ asset('storage/profile/' . Auth::user()->picture) }}" width="31"
                                    alt="Ryan Taylor">
                            @endif

                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            @if (Auth::user()->picture == null)
                                <div class="avatar avatar-sm">
                                    <img src="{{ asset('backend/img/profiles/avatar-01.jpg') }}" alt="User Image"
                                        class="avatar-img rounded-circle">
                                </div>
                            @else
                                <div class="avatar avatar-sm">
                                    <img src="{{ asset('storage/profile/' . Auth::user()->picture) }}"
                                        alt="User Image" class="avatar-img rounded-circle">
                                </div>
                            @endif

                            <div class="user-text">
                                <h6>{{ Auth::user()->name }}</h6>
                                <p class="text-muted mb-0">Admin Dashboard</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ url('admin/account-security') }}">My Profile</a>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form-admin').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form-admin" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>

                        <li>
                            <a href="{{ route('admin') }}"><i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{ url('admin/new-requests') }}"><i class="fas fa-map"></i> <span>All
                                    New Requests</span></a>
                        </li>

                        <li>
                            <a href="{{ url('admin/all-deceased') }}"><i class="fas fa-atom"></i> <span>All
                                    Deceased </span></a>
                        </li>

                        <li>
                            <a href="{{ url('admin/add-deceased') }}"><i class="fas fa-users"></i> <span>Add
                                    Deceased</span></a>
                        </li>
                        <li>

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> <span>{{ __('Logout') }}</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid container-clossure">
                @yield('content')
                @yield('scripts')
            </div>

            <footer>
                <p>Copyright © 2022 Cemetery Mapping.</p>
            </footer>

        </div>

    </div>


    {{-- <script src="{{ asset('backend/js/jquery-3.6.0.min.js') }}"></script> --}}

    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('backend/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('backend/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/apexchart/chart-data.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/js/script.js') }}"></script>
    <script src="{{ asset('backend/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#exampleds').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>
</body>

</html>
