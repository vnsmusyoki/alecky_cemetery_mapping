@extends('admin.layout')
@section('title', 'All Deceased')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome Admin!</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">All deceased</li>
                </ul>
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
                                <td style="text-transform: uppercase;letter-spacing:2px;font-weight:800;color:green;">
                                    {{ $user->death_cert }}</td>
                                <td>{{ $user->next_kin_full_names }}/ {{ $user->next_kin_phone_number }}</td>
                                <td>{{ $user->latitude }}, {{ $user->longitude }}</td>
                                <td><a href="{{ url('admin/deceased-details/' . $user->id) }}">Details</a>/ <a href="{{ url('admin/remove-deceased/'.$user->id) }}" class="badge badge-danger">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
