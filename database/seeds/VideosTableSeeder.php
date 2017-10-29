<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Video::class, 10)->create();
    }
}