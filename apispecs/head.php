<?php

namespace OpenApi\Examples\ExampleObject;

use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="user",
 *     description="Friend management api"
 * )
 * @OA\Info(
 *     version="1.0",
 *     title="Example for response examples value",
 *     description="Example info",
 *     @OA\Contact(name="fitrazh@gmail.com")
 * )
 * @OA\Server(
 *     url="http://localhost:8070",
 *     description="Local API server"
 * )
 */
class OpenApiSpec
{
}

/**
 * @OA\POST(
 *     path="/friend/request",
 *     summary="Friend request",
 *     description="Send friend request",
 *     operationId="v1FriendRequest",
 *     tags={"Friend"},
 *     @OA\RequestBody(
 *      request="Friend request",
 *      description="Required and optional input to update an order product.",
 *      @OA\JsonContent(
 *          @OA\Property(property="requestor", type="email", format="email", example="email1@example.com"),
 *          @OA\Property(property="to", type="email", format="email", example="email2@example.com")
 *      )
 *   ),
 *   @OA\Response(
 *      response=422,
 *      description="Unprocessable Content",
 *      @OA\JsonContent(
 *            @OA\Property(property="requestor", type="string", example = "The selected requestor is invalid.")
 *      )
 *   ),
 *   @OA\Response(
 *      response=403,
 *      description="Forbidden",
 *   ),
 *   @OA\Response(
 *      response=400,
 *      description="Bad request",
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="Not found",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="false")
 *      )
 *   ),
 *   @OA\Response(
 *      response=409,
 *      description="Conflict",
 *   ),
 *   @OA\Response(
 *      response=429,
 *      description="Too many request",
 *   ),
 *   @OA\Response(
 *      response=200,
 *      description="Success",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="true")
 *      )
 *    )
 * )
 */

/**
 * @OA\PUT(
 *     path="/friend/accept",
 *     summary="Accept friend request",
 *     description="Accept friend request",
 *     operationId="v1UpdateFriendRequestAccept",
 *     tags={"Friend"},
 *     @OA\RequestBody(
 *      request="Friend request",
 *      description="Required and optional input to update an order product.",
 *      @OA\JsonContent(
 *          @OA\Property(property="requestor", type="email", format="email", example="email1@example.com"),
 *           @OA\Property(property="to", type="email", format="email", example="email2@example.com")
 *      )
 *   ),
 *   @OA\Response(
 *      response=422,
 *      description="Unprocessable Content",
 *      @OA\JsonContent(
 *            @OA\Property(property="requestor", type="string", example = "The selected requestor is invalid.")
 *      )
 *   ),
 *   @OA\Response(
 *      response=403,
 *      description="Forbidden",
 *   ),
 *   @OA\Response(
 *      response=400,
 *      description="Bad request",
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="Not found",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="false")
 *      )
 *   ),
 *   @OA\Response(
 *      response=409,
 *      description="Conflict",
 *   ),
 *   @OA\Response(
 *      response=429,
 *      description="Too many request",
 *   ),
 *   @OA\Response(
 *      response=200,
 *      description="Success",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="true")
 *      )
 *    )
 * )
 */

 /**
 * @OA\PUT(
 *     path="/friend/block",
 *     summary="Block friend request",
 *     description="Block a user",
 *     operationId="v1UpdateBlockFriend",
 *     tags={"Friend"},
 *     @OA\RequestBody(
 *      request="Friend request",
 *      description="Required and optional input to update an order product.",
 *      @OA\JsonContent(
 *          @OA\Property(property="requestor", type="email", format="email", example="email1@example.com"),
 *           @OA\Property(property="block", type="email", format="email", example="email2@example.com")
 *      )
 *   ),
 *   @OA\Response(
 *      response=422,
 *      description="Unprocessable Content",
 *      @OA\JsonContent(
 *            @OA\Property(property="requestor", type="string", example = "The selected requestor is invalid.")
 *      )
 *   ),
 *   @OA\Response(
 *      response=403,
 *      description="Forbidden",
 *   ),
 *   @OA\Response(
 *      response=400,
 *      description="Bad request",
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="Not found",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="false")
 *      )
 *   ),
 *   @OA\Response(
 *      response=409,
 *      description="Conflict",
 *   ),
 *   @OA\Response(
 *      response=429,
 *      description="Too many request",
 *   ),
 *   @OA\Response(
 *      response=200,
 *      description="Success",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="true")
 *      )
 *    )
 * )
 */

 /**
 * @OA\PUT(
 *     path="/friend/reject",
 *     summary="Reject friend request",
 *     description="Reject friend request",
 *     operationId="v1UpdateFriendRequestReject",
 *     tags={"Friend"},
 *     @OA\RequestBody(
 *      request="Friend request",
 *      description="Required and optional input to update an order product.",
 *      @OA\JsonContent(
 *          @OA\Property(property="requestor", type="email", format="email", example="email1@example.com"),
 *          @OA\Property(property="to", type="email", format="email", example="email2@example.com")
 *      )
 *   ),
 *   @OA\Response(
 *      response=422,
 *      description="Unprocessable Content",
 *      @OA\JsonContent(
 *            @OA\Property(property="requestor", type="string", example = "The selected requestor is invalid.")
 *      )
 *   ),
 *   @OA\Response(
 *      response=403,
 *      description="Forbidden",
 *   ),
 *   @OA\Response(
 *      response=400,
 *      description="Bad request",
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="Not found",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="false")
 *      )
 *   ),
 *   @OA\Response(
 *      response=409,
 *      description="Conflict",
 *   ),
 *   @OA\Response(
 *      response=429,
 *      description="Too many request",
 *   ),
 *   @OA\Response(
 *      response=200,
 *      description="Success",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="true")
 *      )
 *    )
 * )
 */

/**
 * @OA\POST(
 *     path="/friend/list/request",
 *     summary="Get all friend request list",
 *     description="Get all friend request list",
 *     operationId="v1UpdateFriendRequestList",
 *     tags={"Friend"},
 *     @OA\RequestBody(
 *      request="Friend request",
 *      description="Required and optional input to update an order product.",
 *      @OA\JsonContent(
 *          @OA\Property(property="email", type="email", format="email", example="email1@example.com"),
 *      )
 *   ),
 *   @OA\Response(
 *      response=422,
 *      description="Unprocessable Content",
 *      @OA\JsonContent(
 *            @OA\Property(property="requestor", type="string", example = "The selected requestor is invalid.")
 *      )
 *   ),
 *   @OA\Response(
 *      response=403,
 *      description="Forbidden",
 *   ),
 *   @OA\Response(
 *      response=400,
 *      description="Bad request",
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="Not found",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="false")
 *      )
 *   ),
 *   @OA\Response(
 *      response=409,
 *      description="Conflict",
 *   ),
 *   @OA\Response(
 *      response=429,
 *      description="Too many request",
 *   ),
 *   @OA\Response(
 *      response=200,
 *      description="Success",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="true"),
 *           @OA\Property(property="data", type="array",
 *              @OA\Items(
 *                  @OA\Property(property="requestor", type="string", example="email1@mail.com"),
 *                  @OA\Property(property="status", type="string", example="reject")
 *              )
 *          )
 *      )
 *    )
 * )
 */

 /**
 * @OA\POST(
 *     path="/friend/list",
 *     summary="API to see list of friends",
 *     description="API to see list of friends",
 *     operationId="v1GetFriendList",
 *     tags={"Friend"},
 *     @OA\RequestBody(
 *      request="Friend request",
 *      description="Required and optional input to update an order product.",
 *      @OA\JsonContent(
 *          @OA\Property(property="email", type="email", format="email", example="email1@example.com"),
 *      )
 *   ),
 *   @OA\Response(
 *      response=422,
 *      description="Unprocessable Content",
 *      @OA\JsonContent(
 *            @OA\Property(property="requestor", type="string", example = "The selected requestor is invalid.")
 *      )
 *   ),
 *   @OA\Response(
 *      response=403,
 *      description="Forbidden",
 *   ),
 *   @OA\Response(
 *      response=400,
 *      description="Bad request",
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="Not found",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="false")
 *      )
 *   ),
 *   @OA\Response(
 *      response=409,
 *      description="Conflict",
 *   ),
 *   @OA\Response(
 *      response=429,
 *      description="Too many request",
 *   ),
 *   @OA\Response(
 *      response=200,
 *      description="Success",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="true"),
 *           @OA\Property(property="data", type="array",
 *              @OA\Items(
 *                  @OA\Property(property="requestor", type="string", example="email1@mail.com"),
 *                  @OA\Property(property="status", type="string", example="reject")
 *              )
 *          )
 *      )
 *    )
 * )
 */

 /**
 * @OA\POST(
 *     path="/friend/mutual",
 *     summary="API to see list of mutual friends",
 *     description="API to see list of mutual friends",
 *     operationId="v1GetFriendMutualList",
 *     tags={"Friend"},
 *     @OA\RequestBody(
 *      request="Friend request",
 *      description="Required and optional input to update an order product.",
 *      @OA\JsonContent(
 *           @OA\Property(property="friends", type="array",
 *              @OA\Items(
 *                  @OA\Property(property="email1", type="string", example="email1@mail.com"),
 *                  @OA\Property(property="email2", type="string", example="email2@mail.com")
 *              )
 *          )
 *      )
 *   ),
 *   @OA\Response(
 *      response=422,
 *      description="Unprocessable Content",
 *      @OA\JsonContent(
 *            @OA\Property(property="email1", type="string", example = "array[0]: is email1 is invalid format.")
 *      )
 *   ),
 *   @OA\Response(
 *      response=403,
 *      description="Forbidden",
 *   ),
 *   @OA\Response(
 *      response=400,
 *      description="Bad request",
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="Not found",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="false")
 *      )
 *   ),
 *   @OA\Response(
 *      response=409,
 *      description="Conflict",
 *   ),
 *   @OA\Response(
 *      response=429,
 *      description="Too many request",
 *   ),
 *   @OA\Response(
 *      response=200,
 *      description="Success",
 *      @OA\JsonContent(
 *           @OA\Property(property="success", type="boolean", example="true"),
 *           @OA\Property(property="data", type="array",
 *              @OA\Items(
 *                  @OA\Property(property="email4", type="string", example="email4@mail.com"),
 *                  @OA\Property(property="email7", type="string", example="email7@mail.com")
 *              )
 *           ),
 *           @OA\Property(property="count", type="integer", example="2")
 *      )
 *    )
 * )
 */

class UserUpdateEndpoint
{
}

/**
 * @OA\Post(
 *     path="/users",
 *     summary="Adds a new user",
 *     description="Adds a new user",
 *     operationId="addUser",
 *     tags={"user"},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(
 *                     property="id",
 *                     type="string"
 *                 ),
 *                 @OA\Property(
 *                     property="name",
 *                     type="string"
 *                 ),
 *                 @OA\Property(
 *                     property="phone",
 *                     oneOf={
 *                     	   @OA\Schema(type="string"),
 *                     	   @OA\Schema(type="integer"),
 *                     }
 *                 ),
 *                 example={"id": "a3fb6", "name": "Jessica Smith", "phone": 12345678}
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             oneOf={
 *                 @OA\Schema(ref="#/components/schemas/Result"),
 *                 @OA\Schema(type="boolean")
 *             },
 *             @OA\Examples(example="result", value={"success": true}, summary="An result object."),
 *             @OA\Examples(example="bool", value=false, summary="A boolean value."),
 *         )
 *     )
 * )
 */
class UserAddEndpoint
{
}

/**
 * @OA\Schema(
 *     schema="Result",
 *     title="Sample schema for using references",
 * 	@OA\Property(
 *         property="status",
 *         type="string"
 *     ),
 * 	@OA\Property(
 *         property="error",
 *         type="string"
 *     )
 * )
 */
class ResultSchema
{
}