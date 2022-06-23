<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.medicine.index', [
            "medicines" => Medicine::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.medicine.create', [
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'generic_name' => 'required',
            'form' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'stock' => 'required',
        ]);

        $medicine = new Medicine();

        $medicine->generic_name = $request->generic_name;
        $medicine->slug = $request->slug;
        $medicine->form = $request->form;
        $medicine->restriction_formula = $request->restriction_formula;
        $medicine->price = $request->price;
        $medicine->description = $request->description;
        $medicine->category_id = $request->category_id;
        $medicine->stock = $request->stock;
        $medicine->faskes1 = ($request->faskes1 != null) ? 1 : 0;
        $medicine->faskes2 = ($request->faskes2 != null) ? 1 : 0;
        $medicine->faskes3 = ($request->faskes3 != null) ? 1 : 0;
        $medicine->save();


        return redirect('/dashboard')->with('status', 'Medicine Data Successfuly Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.medicine.edit', [
            "medicine" => Medicine::find($id),
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        // $request->validate([
        //     'generic_name' => 'required',
        //     'form' => 'required',
        //     'restriction_formula' => 'required',
        //     'price' => 'required',
        //     'category_id' => 'required',
        //     'slug' => 'required',
        //     'stock' => 'required',
        // ]);

        $medicine = Medicine::find($id);

        $medicine->generic_name = $request->generic_name;
        $medicine->slug = $request->slug;
        $medicine->form = $request->form;
        $medicine->restriction_formula = $request->restriction_formula;
        $medicine->price = $request->price;
        $medicine->description = $request->description;
        $medicine->category_id = $request->category_id;
        $medicine->stock = $request->stock;
        $medicine->faskes1 = ($request->faskes1 != null) ? 1 : 0;
        $medicine->faskes2 = ($request->faskes2 != null) ? 1 : 0;
        $medicine->faskes3 = ($request->faskes3 != null) ? 1 : 0;

        $medicine->save();

        return redirect('/dashboard')->with('status', 'Medicine Data Successfuly Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine = Medicine::find($id);
        $medicine->delete();

        return redirect('/dashboard')->with('status', 'Medicine Data Successfuly Removed!');
    }

    public function report1()
    {
        $medicine_collection = DB::table('medicines')
            ->select('medicines.id', 'medicines.generic_name', DB::raw('SUM(quantity) as total_terjual'))
            ->join('order_detail', 'medicines.id', '=', 'order_detail.medicine_id')
            ->groupBy('medicines.id')
            ->orderByRaw('total_terjual DESC')
            ->limit(5)
            ->get();

        return view('admin.report.report1', [
            "medicine_collection" => $medicine_collection
        ]);
    }
}
