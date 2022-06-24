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
            @if ($cartItems->count() > 0)
                <div class="card-body">
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($cartItems as $item)
                        <div class="row medicine_data">
                            <div class="col-md-2 my-auto">
                                <img src="{{ asset('assets/images/canabis.png') }}" alt="" height="70px"
                                    width="70px">
                            </div>
                            <div class="col-md-3 my-auto">
                                <h6>{{ $item->medicine->generic_name }}</h6>
                            </div>
                            <div class="col-md-2 my-auto">
                                <h6>IDR {{ $item->medicine->price }}</h6>
                            </div>
                            <div class="col-md-3 my-auto">
                                <input type="hidden" class="medicine_id" value="{{ $item->medicine_id }}">
                                @if ($item->medicine->stock > $item->quantity)
                                    <label for="Quantity">Quantity</label>
                                    <div class="input-group text-center mb-3" style="width:130px;">
                                        <button class="input-group-text changeQuantity decrement-btn">-</button>
                                        <input type="text" name=quantity class="form-control qty-input text-center"
                                            value="{{ $item->quantity }}">
                                        <button class="input-group-text changeQuantity increment-btn">+</button>
                                    </div>
                                    @php
                                        $total += $item->medicine->price * $item->quantity;
                                    @endphp
                                @else
                                    <h6>Out of stock</h6>
                                @endif
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn btn-danger delete-cart-item"> <i class="fa fa-trash"></i>
                                    Remove</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    <h6>Total Price: {{ $total }}
                        <a href="{{ url('/checkout') }}" class="btn btn-outline-success float-end">Proceed to Checkout</a>
                    </h6>
                </div>
            @else
                <div class="card-body text-center">
                    <h2>Your <i class="fa fa-shopping-cart"> Cart is empty</i></h2>
                    <a href="{{ url('/') }}" class="btn btn-outline-primary float-end">Continue Shopping</a>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
@endsection
