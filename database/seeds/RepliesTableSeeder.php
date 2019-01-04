<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
            'user_id' => 1,
            'discussion_id' => 1,
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ];

        $r2 = [
            'user_id' => 2,
            'discussion_id' => 2,
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]; 

        $r3 = [
            'user_id' => 2,
            'discussion_id' => 1,
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ];
        App\Replies::create($r1);
        App\Replies::create($r2);
        App\Replies::create($r3);

    }
}
