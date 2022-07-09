<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => Uuid::generate(4),
            'name' => 'test',
            'email' => 'test@example.com',
            'password' => app('hash')->make('test'),
            'created_at' => Carbon::now('UTC'),
            'updated_at' => Carbon::now('UTC'),
        ]);
    }
}
