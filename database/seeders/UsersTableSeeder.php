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
       
        $status = [
            [
              'id' => 'orders',
              'name' => 'status',
              'email' => 0,
              'status' => 'pending',
              'value' => 'pending'
            ],
            [
              'table' => 'orders',
              'column' => 'status',
              'sequence' => 0,
              'status' => 'processing',
              'value' => 'processing'
            ],
            [
              'table' => 'orders',
              'column' => 'status',
              'sequence' => 0,
              'status' => 'completed',
              'value' => 'completed'
            ]
          ];

        foreach ($status as $item) {
            Users::create([
            'id' => Uuid::generate(4),
            'name' => "test",
            'email' => "test@gmail.com",
            'created_at' => Carbon::now('UTC'),
            'updated_at' => Carbon::now('UTC')
            ]);
        }

    }
}
