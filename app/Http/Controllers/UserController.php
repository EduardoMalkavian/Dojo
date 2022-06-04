<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{


    public function index()
    {
        $data = User::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = User::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $data = User::create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $data = User::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();

        return response()->json('',201);
    }

}
