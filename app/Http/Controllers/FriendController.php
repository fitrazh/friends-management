<?php

namespace App\Http\Controllers;

use App\User;
use App\Friend;

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


class FriendController extends Controller
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

    public function v1GetFriends(Request $request)
    {
      
        try {
            $friends = Friend::get();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return response()->json(['data' => $friends]);
    }

    public function v1GetFriendList(Request $request)
    {
        $data = $request->all();

        try {
            $friends = Friend::where('friend_id','=',User::getIdByEmail($data['email']))
            ->where('status','=',Friend::ACTION_FRIEND_ACCEPT)->get();
            
            if(count($friends)>0){
                $list_friend = [];
                foreach($friends as $friend){
                    $list = [
                        'requestor' => User::getEmailById($friend['user_id'])
                    ];
                    array_push($list_friend, $list);
                }
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return response()->json(['friends' =>  $list_friend]);
    }


    public function v1GetFriendRequestList(Request $request)
    {
        $data = $request->all();
        $this->validationFriendRequest($request);

        try {
            $friends = Friend::where('friend_id','=',User::getIdByEmail($data['email']))
           ->get();

           if(count($friends)>0){
            $list_friend = [];
            foreach($friends as $friend){
                $list = [
                    'requestor' => User::getEmailById($friend['user_id']),
                    'status' => $friend['status']
                ];
                array_push($list_friend, $list);
            }
           }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return response()->json(['requests' =>  $list_friend]);
    }

    public function v1GetMutalFriend(Request $request)
    {
        $data = $request->all();
        $this->validationFriendRequest($request);

        $mutual_friend = [];
        try {
            $intersect = DB::select(
                "select user_id from friends where status = 'accept' and  friend_id= '". User::getIdByEmail($data['friends'][0])."' 
                INTERSECT
                 select user_id from friends where status = 'accept' and  friend_id='". User::getIdByEmail($data['friends'][1])."'"
              );

            if(count($intersect)>0){
                foreach($intersect as $friend){
                    array_push($mutual_friend,  User::getEmailById($friend->user_id));
                }
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return response()->json(["success" => true,"friends" =>  $mutual_friend]);
    }

    public function v1FriendRequest(Request $request)
    {
        $data = $request->all();
        $this->validationFriendRequest($request);

        try {
            $User = Friend::create([
                'user_id' => User::getIdByEmail($data['requestor']),
                'friend_id' => User::getIdByEmail($data['to']),
                'status' => Friend::ACTION_FRIEND_REQUEST
            ]);
        } catch (\Exception $e) {
            return response()->json(['data' => $User,'messsage' => $e->getMessage()], 500);
        }

        return response()->json(['success' => true], 200);
    }

    public function v1UpdateFriendRequestAccept(Request $request)
    {
        $data = $request->all();
        $this->validationFriendRequest($request);

        try {
            Friend::where('user_id', User::getIdByEmail($data['requestor']))
            ->where('friend_id', User::getIdByEmail($data['to']))
            ->update(['status' => Friend::ACTION_FRIEND_ACCEPT]);
        } catch (\Throwable $th) {
            return response()->json(['success' => false,'messsage' => $th->getMessage()], 500);
        }
        
        return response()->json(['success' => true], 200);
    }

    public function v1UpdateFriendRequestReject(Request $request)
    {
        $data = $request->all();
        //$this->validationFriendRequest($request);

        try {
            Friend::where('user_id', User::getIdByEmail($data['requestor']))
            ->where('friend_id', User::getIdByEmail($data['to']))
            ->update(['status' => Friend::ACTION_FRIEND_REJECT]);
        } catch (\Throwable $th) {
            return response()->json(['success' => false,'messsage' => $th->getMessage()], 500);
        }
        
        return response()->json(['success' => true], 200);
    }

    //v1UpdateFriendRequestBlock
    private function validationFriendRequest($request)
    {
        $this->validate($request, [
            'requestor' => 'exists:App\Models\User,email',
            'to' => 'exists:App\Models\User,email',
        ]);
    }
}
