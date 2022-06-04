<?php

namespace App\Http\Controllers;

use App\Models\UserHasCustomer;
use Illuminate\Http\Request;

class UserHasCustomerController extends Controller{


    public function index()
    {
        $data = UserHasCustomer::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = UserHasCustomer::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'users_id',
            'customer_id'
        ]);

        $data = UserHasCustomer::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'users_id',
            'customer_id'
        ]);
        $data = UserHasCustomer::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = UserHasCustomer::find($id);
        $data->delete();

        return response()->json('',201);
    }

}
