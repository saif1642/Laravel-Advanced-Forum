<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password' =>bcrypt('admin'),
            'avatar' => asset('avatars/avatar.png'),
            'admin' =>1
        ]);
    }
}