<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlaaController extends Controller
{
    public function index(){

        $users = User::get();

        return response()->json([
            'status' => 200,
            'data'   => $users
        ]);
    }

    public function show($id){

        $users = User::find($id);

        return response()->json([
            'status' => 200,
            'data'   => $users
        ]);
    }

    public function update(Request $request, $id){

        Validator::make($request, [
            'name' => 'string|required|max:255'
        ]);

        User::find($id)->update([
            'name' => $request->name,
            'name' => $request->name,
            'name' => $request->name,
            'name' => $request->name,
            'name' => $request->name,
            'name' => $request->name,
            'name' => $request->name,
            'name' => $request->name,
        ]);
    }
}
