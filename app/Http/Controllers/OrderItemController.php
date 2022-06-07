<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderItemRequest;
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

    public function store(OrderItemRequest $request)
    {

        $data = OrderItem::create($request->all());
        return response()->json($data);
    }

    public function update(OrderItemRequest $request, $seq)
    {

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
