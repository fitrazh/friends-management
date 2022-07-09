<?php

use App\User;
use App\Friend;
use Illuminate\Support\Facades\Http;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Ramsey\Uuid\Uuid;

class FriendTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();

        $this->faker = parent::createFaker();
    }

    /**
     * User
     */
    public function testV1CreateUsers()
    {
        Queue::fake();
        $name = $this->faker->name;
        $email = $this->faker->safeEmail;
 
        $payload = [
            'name' => $name,
            'email' => $email,
        ];

        $this->json('post', "http://localhost:8070/users/insert", $payload);

        $this->seeStatusCode(201);
        $this->assertEquals(1, User::count());
        $response_json = $this->response->json();

        $this->assertEquals($email, $response_json['data']['email']);
        $this->assertEquals($name, $response_json['data']['name']);

        $this->assertNotNull($response_json['data']['updated_at']);
        $this->assertNotNull($response_json['data']['created_at']);
    }

    /**
     * Friends
     */
    public function testV1CreateFriendRequest()
    {
        Queue::fake();
        $email1 = $this->faker->safeEmail;
        $email2 = $this->faker->safeEmail;
 
        $payload = [
            'requestor' => $email1,
            'to' => $email2,
        ];

        $this->json('post', "http://localhost:8070/friend/request", $payload);
        $this->seeStatusCode(201);
        $this->assertEquals(1, User::count());
        $response_json = $this->response->json();

        $this->assertNotNull($response_json);
    }

    public function testV1GetFriendListNotFound()
    {
        $email1 = $this->faker->safeEmail;
        $email2 = $this->faker->safeEmail;
 
        $payload = [
            'email' => 'notfound@email.com'
        ];
        $this->json('post', "http://localhost:8070/friend/request", $payload);
        $this->seeStatusCode(404);
    }
}