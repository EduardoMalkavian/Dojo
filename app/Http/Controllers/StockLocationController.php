<?php

namespace App\Http\Controllers;

use App\Models\StockLocation;
use Illuminate\Http\Request;

class StockLocationController extends Controller{


    public function index()
    {
        $data = StockLocation::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = StockLocation::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'description'=>'required'
        ]);

        $data = StockLocation::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'description'=>'required'
        ]);
        $data = StockLocation::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = StockLocation::find($id);
        $data->delete();

        return response()->json('',201);
    }

}
