<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'nickname' => 'hanako',
            'gender' => '女',
            'zipcode' => '1234567',
            'email' => 'abc@gmail.com',
            'password' =>'abcde',
            ],
            [
                'nickname' => 'taro',
                'gender' => '男',
                'zipcode' => '1234567',
                'email' => 'def@gmail.com',
                'password' =>'abcde',
                ],
        ];

        foreach ($users as $user) {

            DB::table('users')->insert([
                'nickname' => $user['nickname'],
                'gender' => $user['gender'],
                'zipcode' => $user['zipcode'],
                'email' => $user['email'],
                'password' => $user['password'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
