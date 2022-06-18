<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Medicine::all();
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
                'restriction_formula' => 'required',
                'price' => 'required',
                'faskes1' => 'required',
                'faskes2' => 'required',
                'faskes3' => 'required',
                'category_id' => 'required'
        ]);

        return Medicine::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Medicine::find($id);
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
        $medicine = Medicine::find($id);
        $medicine->update($request->all());
        return $medicine;
    }

    /**
     * Search for a generic name
     *
     * @param  \App\Models\Medicine  $medicine
     * @return 
     */
    public function search($generic_name)
    {
        return Medicine::where('generic_name','like','%'.$generic_name.'%')->get();
    }
}
