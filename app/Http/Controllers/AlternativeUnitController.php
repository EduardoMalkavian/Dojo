<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlternativeUnitRequest;
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

    public function store(AlternativeUnitRequest $request)
    {
    
        $data = AlternativeUnit::create($request->all());
        return response()->json($data);
    }

    public function update(AlternativeUnitRequest $request, $id)
    {
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
