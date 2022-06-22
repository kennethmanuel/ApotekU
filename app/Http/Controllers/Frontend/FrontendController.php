<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        // $featured_medicines = Medicine::where('trending', '1')->take(15)->get();
        $featured_medicines = Medicine::all();
        $trending_category = Category::all()->take(5);
        return view('frontend.index', [
            "featured_medicines" => $featured_medicines,
            "trending_category" => $trending_category
        ]);
    }

    public function category()
    {
        return view('frontend.category', [
            "categories" => Category::all()
        ]);
    }
}
