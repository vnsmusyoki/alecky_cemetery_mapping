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
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    {{ $sections->count() }} - Available
                </div>

            </div>
            @if ($sections->count() >= 1)
                @foreach ($sections as $section)
                    <div class="card">
                        <div class="card-header">
                            <h5>{{$section->section_name }}</h5>
                            <h6><strong>Slots Available - {{ $section->slots_available }}</strong></h6>
                        </div>
                        <div class="card-body">
                            <p>Location:-</p>
                            <p>{{ $section->location }}</p>

                            <p>
                                <span class="btn btn-info btn-sm"><small>Date Created - {{ $section->created_at->format('l, d-m-y, h:i:s a') }}</small></span>
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif


        </div>
    </div>
@endsection
