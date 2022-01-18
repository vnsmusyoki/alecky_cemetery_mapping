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
                            <h3>{{ $users->count() }}</h3>
                            <h6>New Data</h6>
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
    <div class="card row" style="padding:1.5rem .5rem;">

        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="display" id="exampleds">
                    <thead style="font-size:12px;font-weight:300;">
                        <tr>
                            <th>#</th>
                            <th>Picture</th>
                            <th>Deceased</th>
                            <th>Sun Rise</th>
                            <th>Sun Set</th>
                            <th>Burial Date</th>
                            <th>Death Cert</th>
                            <th>Next of Kin</th>
                            <th>Grave Mapping</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr style="font-size:12px;">
                                <td>{{ ++$key }}
                                <td><img src="{{ asset('storage/pictures/' . $user->picture) }}"
                                        style="width:60px;height:60px;border-radius:50%;" /></td>
                                <td>{{ $user->full_names }}</td>
                                <td>{{ $user->birth_date->format('d/m/Y') }}</td>
                                <td>{{ $user->death_date->format('d/m/Y') }}</td>
                                <td>{{ $user->burial_date->format('d/m/Y') }}</td>
                                <td>{{ $user->death_cert }}</td>
                                <td>{{ $user->next_kin_full_names }}/ {{ $user->next_kin_phone_number }}</td>
                                <td>{{ $user->latitude }}, {{ $user->longitude }}</td>
                                <td><a href="{{ url('admin/deceased-details/' . $user->id) }}">Details</a></td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
