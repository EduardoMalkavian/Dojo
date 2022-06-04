<?php

namespace App\Http\Controllers;

use App\Models\Bulk;
use Illuminate\Http\Request;

class BulkController extends Controller{

    private $model;
    public function __construct(Bulk $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        $data = Bulk::all();
        return response()->json($data);
    }

    public function show($slug)
    {
        $data = Bulk::find($slug);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|unique:bulks|max:2',
            'name' => 'required',
        ]);

        $data = Bulk::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'slug' => 'required|unique:bulks|max:2',
            'name' => 'required',
        ]);
        $data = Bulk::find($slug);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($slug)
    {
        $data = Bulk::find($slug);
        $data->delete();

        return response()->json('',201);
    }

}
