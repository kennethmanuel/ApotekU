<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.orders.index', [
            "orders" => Order::where('user_id', Auth::id())->get()
        ]);
    }

    public function vieworder($id)
    {
        return view('frontend.orders.view', [
            "orders" => Order::where('id', $id)->where('user_id', Auth::id())->first()
        ]);
    }

    public function report2()
    {
        $user_collection = DB::table('users')
            ->select('users.id', 'users.name', DB::raw('SUM(total_price) as total_belanja'))
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->groupBy('users.id', 'users.name')
            ->orderByRaw('total_belanja DESC')
            ->limit(3)
            ->get();

        return view('admin.report.report2', [
            "user_collection" => $user_collection
        ]);
    }
}
