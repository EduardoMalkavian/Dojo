<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller{


    public function index()
    {
        $data = Product::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = Product::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price'=> 'required',
            'bulk_slug'=> 'required',
            'category_id'=> 'required'
        ]);

        $data = Product::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price'=> 'required',
            'bulk_slug'=> 'required',
            'category_id'=> 'required'
        ]);
        $data = Product::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = Product::find($id);
        $data->delete();

        return response()->json('',201);
    }

}
