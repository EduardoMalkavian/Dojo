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
        $data = $this->model->with('items')->get();

        return response()->json($data);
    }

    public function show($id)
    {
    }

    public function store(OrderRequest $request)
    {
    }

    public function update(OrderRequest $request, $id)
    {
    }

    public function delete($id)
    {
        $data = Order::find($id);
        $data->delete();

        return response()->json('', 201);
    }
}
