<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    public function run()
    {
        $tags = factory(App\Tag::class, 50)->create();
        $videos = App\Video::all();

        foreach(range(1, 50) as $counter) {
            $video = $videos->random();
            $video->tags()->attach($tags->random()->id);
        }
    }
}