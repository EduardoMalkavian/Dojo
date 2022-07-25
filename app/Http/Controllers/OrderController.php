<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        /*return view("Order.create");*/
    }

    public function show($id)
    {
    }

    public function store(OrderRequest $request)
    {
        $max_number = DB::table('orders')->max('number');


        $request_data = $request->all();
        $order = Order::create([
            'number' => ($max_number === null ? env("NRO_INITPED") : $max_number) + 1,
            'date' => $request_data['data'],
            'observation' => $request_data['obsevation'],
        ]);


        foreach ($request_data['items'] as $item) {
            $order->items()->create($item);
        }

        return response()->json($order);
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

    public function deleteItem($id, $product_id)
    {
        $data = Order::find($id);
        $data->deleteItem($product_id);

        return response()->json('', 201);
    }

    /*public function deleteItemFromOrdem($product_id, $order_id)
    {
        $data = OrderItem::find($order_id, $product_id);
        $data->delete();

        return response()->json('', 201);
    }

    public function StoreAddItem(OrderRequest $request)
    {

        $request_data = $request->all();
        $order = OrderItem::create([
            'order_id' => $request_data['order_id'],
            'product_id' => $request_data['product_id'],
            'quantity' => $request_data['quantity'],
            'value' => $request_data['value'],
        ]);


        foreach ($request_data['items'] as $item) {
            $order->items()->create($item);
        }

        return response()->json($order);
    }*/
}


    /*if ($max_number === null) {
            $max_number = env("NRO_INITPED");
        }*/
