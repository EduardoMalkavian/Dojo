<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller{


    public function index()
    {
        $data = products::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = products::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'price'=> 'required',
            'description'=> 'required',
            'color'=> 'required',
            'quantity'=> 'required',
            'height'=> 'required',
            'width'=> 'required',
            'depth'=> 'required',
            'weight'=> 'required',
            'categories_id'=> 'required',
            'active'=> 'required',
            'bulks_slug'=> 'required'
        ]);

        $data = products::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'price'=> 'required',
            'description'=> 'required',
            'color'=> 'required',
            'quantity'=> 'required',
            'height'=> 'required',
            'width'=> 'required',
            'depth'=> 'required',
            'weight'=> 'required',
            'categories_id'=> 'required',
            'active'=> 'required',
            'bulks_slug'=> 'required',
        ]);
        $data = products::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = products::find($id);
        $data->delete();

        return response()->json('',201);
    }

}
