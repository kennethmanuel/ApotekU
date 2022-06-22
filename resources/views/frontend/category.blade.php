@extends('layouts.front')
@section('title')
    Category
@endsection
@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>All Categories</h2>
                    <div class="row">
                        @foreach ($categories as $category)
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    {{-- <img src="{{ asset('assets/images/canabis.png') }}" alt="Category image" width="300"> --}}
                                    <div class="card-body">
                                        <h5>{{ $category->name }}</h5>
                                        {{-- <small>{{ $medicine->price }}</small> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
