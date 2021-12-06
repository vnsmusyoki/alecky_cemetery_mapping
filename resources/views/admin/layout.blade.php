<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Cemetery Mapping - @yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('backend/img/favicon.png') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
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
                        <span class="user-img"><img class="rounded-circle"
                                src="{{ asset('backend/img/profiles/avatar-01.jpg') }}" width="31"
                                alt="Ryan Taylor"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset('backend/img/profiles/avatar-01.jpg') }}" alt="User Image"
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{{ Auth::user()->name }}</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="">My Profile</a>

                        <a  class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                            <a href="{{ url('admin/managesections') }}"><i class="fas fa-map"></i> <span>All Sections</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-map-marked-alt"></i> <span>Filter Section</span></a>
                        </li>
                        <li>
                            <a href="{{ url('admin/createsection') }}"><i class="fas fa-map-marked-alt"></i> <span>Add New Section</span></a>
                        </li>
                        <li>
                            <a href="{{ url('admin/add-new-location') }}"><i class="fas fa-map-pin"></i> <span>Add New Location</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-search-location"></i> <span>Filter Location</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-location-arrow"></i> <span>Manage Locations</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-atom"></i> <span>All Deceased </span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-search-plus"></i> <span>Filter Deceased</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-users"></i> <span>Manage Deceased</span></a>
                        </li>
                        <li>

                            <a   href="{{ route('logout') }}" onclick="event.preventDefault();
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
            <div class="content container-fluid" style="background-color: #4444;">
                @yield('content')
            </div>

            <footer>
                <p>Copyright © 2021 Cemetery Mapping.</p>
            </footer>

        </div>

    </div>


    <script src="{{ asset('backend/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('backend/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('backend/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/apexchart/chart-data.js') }}"></script>

    <script src="{{ asset('backend/js/script.js') }}"></script>
</body>

</html>
