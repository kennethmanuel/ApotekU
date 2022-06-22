@extends('layouts.front')
@section('title')
    Welcome to Apoteku
@endsection

@section('content')
    @include('layouts.inc.slider')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured Medicines</h2>
                <div class="owl-carousel owl-theme featured-carousel">
                    @foreach ($featured_medicines as $medicine)
                        <div class="item">
                            <div class="card">
                                <img src="{{ asset('assets/images/canabis.png') }}" alt="Medicine image">
                                <div class="card-body">
                                    <h5>{{ $medicine->generic_name }}</h5>
                                    <small>{{ $medicine->price }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Trending Category</h2>
                <div class="owl-carousel owl-theme featured-carousel">
                    @foreach ($trending_category as $category)
                        <div class="item">
                            <div class="card">
                                {{-- <img src="{{ asset('assets/images/canabis.png') }}" alt="Medicine image"> --}}
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

@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endsection
