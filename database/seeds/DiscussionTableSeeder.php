<?php

use Illuminate\Database\Seeder;

class DiscussionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'What is Lorem Ipsum?';
        $t2 = 'Where does it come from?';
        $t3 = 'Where can I get some?';

        $d1 = [
            'title' => $t1,
            'channel_id' => 1,
            'user_id'=>2,
            'content'=>"Lorem Ipsum is simply dummy 
                        text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy 
                        text ever since the 1500s,when an unknown printer took 
                        a galley of type and scrambled it to make a type specimen book.",
            'slug' => str_slug($t1)
        ];
        $d2 = [
            'title' => $t2,
            'channel_id' => 2,
            'user_id'=>2,
            'content'=>"Lorem Ipsum is simply dummy 
                        text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy 
                        text ever since the 1500s,when an unknown printer took 
                        a galley of type and scrambled it to make a type specimen book.",
            'slug' => str_slug($t1)
        ];
        $d3 = [
            'title' => $t3,
            'channel_id' => 1,
            'user_id'=>2,
            'content'=>"Lorem Ipsum is simply dummy 
                        text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy 
                        text ever since the 1500s,when an unknown printer took 
                        a galley of type and scrambled it to make a type specimen book.",
            'slug' => str_slug($t1)
        ];
        App\Discussion::create($d1);
        App\Discussion::create($d2);
        App\Discussion::create($d3);

    }
}
