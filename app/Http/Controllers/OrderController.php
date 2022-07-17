<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{


    private $model;
    public function __construct(Order $model)
    {
        $this->model = $model;
    }

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

    public function store(OrderRequest $request)
    {

        $data = Order::create($request->all());
        return response()->json($data);
    }

    public function update(OrderRequest $request, $id)
    {

        $data = Order::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = Order::find($id);
        $data->delete();

        return response()->json('', 201);
    }
}
