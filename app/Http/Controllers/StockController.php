<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller{


    public function index()
    {
        $data = Stock::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = Stock::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'number'=>'required',
            'users_id'=>'required'
        ]);

        $data = Stock::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'number'=>'required',
            'users_id'=>'required'
        ]);
        $data = Stock::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = Stock::find($id);
        $data->delete();

        return response()->json('',201);
    }

}
