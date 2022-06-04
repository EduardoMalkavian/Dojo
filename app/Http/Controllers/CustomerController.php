<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller{


    public function index()
    {
        $data = Customer::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = Customer::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'document'=> 'required',
            'email'=> 'required',
            'postal_code'=> 'required'
        ]);

        $data = Customer::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            'document'=> 'required',
            'email'=> 'required',
            'postal_code'=> 'required'
        ]);
        $data = Customer::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = Customer::find($id);
        $data->delete();

        return response()->json('',201);
    }

}
