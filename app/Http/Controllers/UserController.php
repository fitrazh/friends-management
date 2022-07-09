<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function v1GetUser()
    {
        try {
            $results = app('db')->select("SELECT * FROM users");
        } catch (\Exception $e) {
            return response()->json(['code' => '', 'message' => 'not found'], 404);
        }

        return response()->json(['data' => $orders], 200);
    }

    //
}
