<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller{


    public function index()
    {
        $data = Order::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = Order::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'number'=>'required',
            'users_id'=>'required'
        ]);

        $data = Order::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'number'=>'required',
            'users_id'=>'required'
        ]);
        $data = Order::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = Order::find($id);
        $data->delete();

        return response()->json('',201);
    }

}
