<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Lumen\Routing\Controller as BaseController;
use Monolog\Handler\StreamHandler;
use Throwable;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(\Illuminate\Http\Request $request)
    {
        $this->request = $request;
    }

    public function v1GetUser(Request $request)
    {
        try {
            $users = User::get();
        } catch (\Exception $e) {
            return $users;
        }

        return $users;
    }

    public function v1InsertUsers(Request $request)
    {
        $data = $request->all();
        $this->validationCreateOrderLevel($request);

        try {
            $User = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
            ]);
        } catch (\Exception $e) {
            return response()->json(['code' => '', 'message' => 'not found'], 404);
        }

        return response()->json(['data' => $User], 200);
    }

    public function v1DeleteUser($request)
    {
        try {
            $user = User::find($request['id']); 
            $user->delete();
        } catch (\Exception $e) {
            return response()->json(['code' => '', 'message' => 'not found'], 404);
        }

        return response()->json(['data' => $orders], 200);
    }

    public function v1DeleteUsers()
    {
        //need to loop
        try {
            $user = User::find($request['id']); 
            $user->delete();
        } catch (\Exception $e) {
            return response()->json(['code' => '', 'message' => 'not found'], 404);
        }

        return response()->json(['data' => $orders], 200);
    }

    //
    private function validationCreateOrderLevel($request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'string|unique:users'
        ]);
    }
}
