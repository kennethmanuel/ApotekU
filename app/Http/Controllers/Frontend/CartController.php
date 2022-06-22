<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $medicine_id = $request->input('medicine_id');
        $medicine_qty = $request->input('medicine_qty');

        if (Auth::check()) {

            $medicine_is_exist = Medicine::where('id', $medicine_id)->first();

            if ($medicine_is_exist) {
                if (Cart::where('medicine_id', $medicine_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(['status' => $medicine_is_exist->name . " Already added to cart"]);
                } else {
                    $cartItem = new Cart();
                    $cartItem->medicine_id = $medicine_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->quantity = $medicine_qty;
                    $cartItem->save();
                    return response()->json(['status' => $medicine_is_exist->name . " Added to cart"]);
                }
            }
        } else {
            return response()->json(['status' => "Login to Continue"]);
        }
    }

    public function cart()
    {
        return view('frontend.cart', [
            "cartItems" => Cart::where('user_id', Auth::id())->get()
        ]);
    }

    public function deleteItem(Request $request)
    {
        if (Auth::check()) {
            $medicine_id = $request->input('medicine_id');
            if (Cart::where('medicine_id', $medicine_id)->where('user_id', Auth::id())->exists()) {
                $cartItem = Cart::where('medicine_id', $medicine_id)->where('user_id', Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status' => 'Medicine Successfully Removed!']);
            }
        } else {
            return response()->json(['status' => "Login to Continue"]);
        }
    }

    public function updateCart(Request $request)
    {
        $medicine_id = $request->medicine_id;
        $medicine_qty = $request->medicine_qty;

        if (Auth::check()) {
            if (Cart::where('medicine_id', $medicine_id)->where('user_id', Auth::id())->exists()) {
                $cartItem = Cart::where('medicine_id', $medicine_id)->where('user_id', Auth::id())->first();
                $cartItem->quantity = $medicine_qty;
                $cartItem->update();
                return response()->json(['status' => 'Quantity updated']);
            }
        } else {
            return response()->json(['status' => "Login to Continue"]);
        }
    }
}
