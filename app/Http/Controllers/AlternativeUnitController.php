<?php

namespace App\Http\Controllers;

use App\Models\AlternativeUnit;
use Illuminate\Http\Request;

class AlternativeUnitController extends Controller{


    public function index()
    {
        $data = AlternativeUnit::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = AlternativeUnit::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id'=>'required'
        ]);

        $data = AlternativeUnit::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id'=>'required'
        ]);
        $data = AlternativeUnit::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = AlternativeUnit::find($id);
        $data->delete();

        return response()->json('',201);
    }

}
