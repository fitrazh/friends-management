<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'UserController@v1GetUser');
$router->post('/users/insert', 'UserController@v1InsertUsers');
$router->get('/friend/list', 'FriendController@v1GetFriends');
$router->post('/friend/list/request', 'FriendController@v1GetFriendRequestList');

$router->post('/friend/list', 'FriendController@v1GetFriendList');
$router->post('/friend/mutual', 'FriendController@v1GetMutalFriend');


$router->put('/friend/reject', 'FriendController@v1UpdateFriendRequestReject');
$router->put('/friend/accept', 'FriendController@v1UpdateFriendRequestAccept');
$router->put('/friend/block', 'FriendController@v1UpdateFriendRequestBlock');

$router->post('/friend/request', 'FriendController@v1FriendRequest');
//$router->get('/', 'UserController@v1GetUser');
