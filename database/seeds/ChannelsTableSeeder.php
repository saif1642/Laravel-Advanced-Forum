<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = ['title' => 'Laravel'];
        $channel2 = ['title' => 'Vue Js'];
        $channel3 = ['title' => 'Node Js'];
        $channel4 = ['title' => 'PHP'];

        App\Channel::create($channel1);
        App\Channel::create($channel2);
        App\Channel::create($channel3);
        App\Channel::create($channel4);
    }
}
