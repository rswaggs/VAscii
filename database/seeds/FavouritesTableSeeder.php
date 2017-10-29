<?php

use Illuminate\Database\Seeder;

class FavouritesTableSeeder extends Seeder
{
    public function run()
    {
        $users = App\User::all();
        $videos = App\Video::all()->pluck('id');

        foreach(range(1,50) as $counter) {
            $user = $users->random();
            $user->favourites()->attach($videos->random());
        }
    }
}