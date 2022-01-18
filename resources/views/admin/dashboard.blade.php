@extends('admin.layout')
@section('title', 'Cemetery Dashboard')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Welcome Admin!</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-4 col-sm-6 col-12 d-flex">
        <div class="card bg-one w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="db-info">
                        <h3>{{ $deceased->count() }}</h3>
                        <h6>Deceased</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 col-12 d-flex">
        <div class="card bg-two w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <div class="db-info">
                        <h3>{{ $locations->count() }}</h3>
                        <h6>Locations</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 col-12 d-flex">
        <div class="card bg-three w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="db-info">
                        <h3>{{ $sections->count() }}</h3>
                        <h6>Sections</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
