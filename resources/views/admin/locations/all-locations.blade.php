@extends('admin.layout')
@section('title', 'All Sections')
@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">All Sections</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/managesections') }}">Sections</a></li>

                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-center mb-0 datatable mt-5 mb-5">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Location ID</th>
                            <th>Section Allocated</th>
                            <th>Deceased</th>
                            <th>Status</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($locations as $key => $location)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $location->location_id }}</td>
                                <td>{{ $location->locationsection->section_name }}</td>
                                <td>
                                    @if ($location->deceased_id == null)
                                        -------
                                    @else
                                        {{ $location->locationdeceased->full_names }}
                                    @endif

                                </td>
                                <td>{{ $location->status }}</td>
                                <td><a href="#" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-pen"></i>
                                    </a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
