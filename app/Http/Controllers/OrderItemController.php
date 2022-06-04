<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller{


    public function index()
    {
        $data = OrderItem::all();
        return response()->json($data);
    }

    public function show($seq)
    {
        $data = OrderItem::find($seq);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id'=> 'requeried',
            'quantity'=> 'requeried',
            'value'=> 'requeried'
        ]);

        $data = OrderItem::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $seq)
    {
        $request->validate([
            'product_id'=> 'requeried',
            'quantity'=> 'requeried',
            'value'=> 'requeried'
        ]);
        $data = OrderItem::find($seq);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($seq)
    {
        $data = OrderItem::find($seq);
        $data->delete();

        return response()->json('',201);
    }

}
