@extends('layouts.front')
@section('title')
    Medicine
@endsection
@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $category->name }}</h2>
                    <div class="row">
                        @foreach ($medicines as $medicine)
                            <div class="col-md-3 mb-3">
                                <a href="{{ url('medicine/' . $medicine->slug) }}">
                                    <div class="card">
                                        <img src="{{ asset('assets/images/canabis.png') }}" alt="medicine image"
                                            width="300">
                                        <div class="card-body">
                                            <h5>{{ $medicine->generic_name }}</h5>
                                            {{-- <small>{{ $medicine->price }}</small> --}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
