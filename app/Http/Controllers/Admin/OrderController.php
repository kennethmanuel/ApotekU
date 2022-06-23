<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.orders.index', [
            "orders" => Order::all()
        ]);
    }

    public function view($id)
    {
        return view('admin.orders.view', [
            "orders" => Order::where('id', $id)->first()
        ]);
    }
}
