<?php

namespace App\Http\Controllers;

use App\Models\TypePayment;
use Illuminate\Http\Request;

class TypePaymentController extends Controller{


    public function index()
    {
        $data = TypePayment::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = TypePayment::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $data = TypePayment::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $data = TypePayment::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = TypePayment::find($id);
        $data->delete();

        return response()->json('',201);
    }

}
