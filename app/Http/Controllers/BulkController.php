<?php

namespace App\Http\Controllers;

use App\Models\bulks;
use Illuminate\Http\Request;

class BulkController extends Controller{


    public function index()
    {
        $data = bulks::all();
        return response()->json($data);
    }

    public function show($slug)
    {
        $data = bulks::find($slug);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|unique:bulks|max:2',
            'name' => 'required',
        ]);

        $data = bulks::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'slug' => 'required|max:2',
            'name' => 'required',
        ]);
        $data = bulks::find($slug);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($slug)
    {
        $data = bulks::find($slug);
        $data->delete();

        return response()->json('',201);
    }

}
