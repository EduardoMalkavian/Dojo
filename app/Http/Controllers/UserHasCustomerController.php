<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserHasCustomerRequest;
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

    public function store(UserHasCustomerRequest $request)
    {

        $data = UserHasCustomer::create($request->all());
        return response()->json($data);
    }

    public function update(UserHasCustomerRequest $request, $id)
    {

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
