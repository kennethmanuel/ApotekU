@extends('layouts.front')
@section('title')
    Checkout
@endsection

@section('content')
    <div class="container mt-3">
        <form action="{{ url('place-order') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Basic Details</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->fname }}"
                                        name="fname" placeholder="Enter First Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->lname }}" name="lname" placeholder="Enter Last Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email" placeholder="Enter Email">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Phone Number</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->phone }}" name="phone" placeholder="Enter First">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Address 1</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->address1 }}" name="address1"
                                        placeholder="Enter First Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Address 2</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->address2 }}" name="address2"
                                        placeholder="Enter First Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="">City</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->city }}" name="city" placeholder="City">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Province</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->province }}" name="province"
                                        placeholder="Enter First Name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6> Order details </h6>
                            <hr>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Price</td>
                                        <td>Quantity</td>
                                        <td>Subtotal</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                        <tr>
                                            <td> {{ $item->medicine->generic_name }} </td>
                                            <td>{{ $item->medicine->price }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->medicine->price * $item->quantity }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <hr>
                            @if ($cartItems->count() > 0)
                                <button type="Submit" class="btn btn-primary">Place Order</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
