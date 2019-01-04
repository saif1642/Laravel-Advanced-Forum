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
            'avatar' => asset('images/avatar.png'),
            'admin' =>1
        ]);
        App\User::create([
            'name'=>'demouser',
            'email'=>'demo@gmail.com',
            'password' =>bcrypt('demouser'),
            'avatar' => asset('images/avatar.png')
        ]);
    }
}
