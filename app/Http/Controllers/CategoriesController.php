<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller{


    public function index()
    {
        $data = categories::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = categories::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'categories_id' => 'required',
        ]);

        $data = categories::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'categories_id' => 'required'
        ]);
        $data = categories::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = categories::find($id);
        $data->delete();

        return response()->json('',201);
    }

}
