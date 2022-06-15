<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockLocationRequest;
use App\Models\Stock_Location;
use Illuminate\Http\Request;

class StockLocationController extends Controller{


    public function index()
    {
        $data = Stock_Location::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = StockL_ocation::find($id);
        return response()->json($data);
    }

    public function store(StockLocationRequest $request)
    {

        $data = StockLocation::create($request->all());
        return response()->json($data);
    }

    public function update(StockLocationRequest $request, $id)
    {
   
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
