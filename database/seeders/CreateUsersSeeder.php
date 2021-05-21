<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1234'),
                'user_type' => 'superadmin'
            ],
            [
                'name' => 'User1',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('1234'),
                'user_type' => 'user'
            ]
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
