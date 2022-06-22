@extends('layouts.front')
@section('title')
    My Cart List
@endsection

@section('content')
    {{-- {{dd($cartItems)  }} --}}
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0"> / Cart</h6>
        </div>
    </div>

    <div class="container my-5">
        <div class="card shadow ">
            <div class="card-body">
                @php
                    $total = 0;
                @endphp
                @foreach ($cartItems as $item)
                    <div class="row medicine_data">
                        <div class="col-md-2 my-auto">
                            <img src="{{ asset('assets/images/canabis.png') }}" alt="" height="70px" width="70px">
                        </div>
                        <div class="col-md-3 my-auto">
                            <h6>{{ $item->medicine->generic_name }}</h6>
                        </div>
                        <div class="col-md-2 my-auto">
                            <h6>{{ $item->medicine->price }}</h6>
                        </div>
                        <div class="col-md-3 my-auto">
                            <input type="hidden" class="medicine_id" value="{{ $item->medicine_id }}">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3" style="width:130px;">
                                <button class="input-group-text changeQuantity decrement-btn">-</button>
                                <input type="text" name=quantity class="form-control qty-input text-center"
                                    value="{{ $item->quantity }}">
                                <button class="input-group-text changeQuantity increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-2 my-auto">
                            <button class="btn btn-danger delete-cart-item"> <i class="fa fa-trash"></i> Remove</button>
                        </div>
                    </div>
                    @php
                        $total += $item->medicine->price * $item->quantity;
                    @endphp
                @endforeach
            </div>
            <div class="card-footer">
                <h6>Total Price: {{ $total }}
                    <button class="btn btn-outline-success float-end">Proceed to Checkout</button>
                </h6>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
