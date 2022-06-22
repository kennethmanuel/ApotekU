@extends('layouts.front')
@section('title')
    {{ $medicine->generic_name . ' Details' }}
@endsection

@section('content')
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('asset/images/canabis.png') }}" alt="" class="u-100">
                    </div>
                    <div class="cold-md-8">
                        {{-- <h2 class="mb-0">
                            {{ $medicine->name  }}
                            <label for="" class="float-end badge bg-danger trending_tag">Trending</label>
                        </h2> --}}
                        <hr>

                        <label for="" class="fw-bold">Price: IDR {{ $medicine->price }}</label>
                        <p class="mt-3">
                            {{ $medicine->description  }}
                        </p>
                        <hr>
                        {{-- @if($medicine) --}}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
