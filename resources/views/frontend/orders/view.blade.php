@extends('layouts.front')
@section('title')
    My Orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Detail
                            <a href="{{ url('my-orders') }}" class="btn btn-outline-dark float-end"> &lt; Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">First Name</label>
                                <div class="border p-2">{{ $orders->fname }}</div>
                                <label for="">Last Name</label>
                                <div class="border p-2">{{ $orders->lname }}</div>
                                <label for="">Phone</label>
                                <div class="border p-2">{{ $orders->phone }}</div>
                                <label for="">Email</label>
                                <div class="border p-2">{{ $orders->email }}</div>
                                <label for="">Address 1</label>
                                <div class="border p-2">{{ $orders->address1 }}</div>
                                <label for="">Address 2</label>
                                <div class="border p-2">{{ $orders->address2 }}</div>
                                <label for="">City</label>
                                <div class="border p-2">{{ $orders->city }}</div>
                                <label for="">Province</label>
                                <div class="border p-2">{{ $orders->province }}</div>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderdetail as $item)
                                            <tr>
                                                <td>{{ $item->medicine->id }}</td>
                                                <td>{{ $item->medicine->generic_name }}</td>
                                                <td>{{ $item->medicine->price }}</td>
                                                <td>{{ $item->quantity }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4>Grand Total: {{ $orders->total_price }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
