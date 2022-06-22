@extends('layouts.front')
@section('title')
    {{ $medicine->generic_name . ' Details' }}
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">Medicine / {{ $medicine->slug }}</h6>
        </div>
    </div>

    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('assets/images/canabis.png') }}" alt="" class="u-100" height="300">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $medicine->generic_name }}
                        </h2>
                        <hr>

                        <label for="" class="fw-bold">Price: IDR {{ $medicine->price }}</label>
                        <p class="mt-3">
                            {{ $medicine->description }}
                        </p>
                        <hr>
                        @if ($medicine->stock > 0)
                            <label for="" class="badge bg-success">In stock</label>
                        @else
                            <label for="" class="badge bg-danger">Out of stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="">Quantity</label>
                                <div class="input-group text-center mb-3" style="width:130px;">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" value="1" class="form-control qty-input text-center">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <br>
                                <button type="button" class="btn btn-success me-3 float-start">Add to wishlist <i class="fa fa-heart"></i></button>
                                <button type="button" class="btn btn-primary me-3 float-start">Add to cart <i class="fa fa-shopping-cart"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('.increment-btn').click(function (e) { 
            e.preventDefault();

            let inc_value = $('.qty-input').val();
            let value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value < 99)
            {
                value++;
                $('.qty-input').val(value);
            }
        });

        $('.decrement-btn').click(function (e) { 
            e.preventDefault();

            let inc_value = $('.qty-input').val();
            let value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value > 1)
            {
                value--;
                $('.qty-input').val(value);
            }
        });
    });
</script>
@endsection
