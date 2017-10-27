<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Ryan Swaggert',
            'email' => 'rswagger@lakeheadu.ca',
        ]);

        factory(App\User::class)->create([
            'name' => 'Dean Tucker',
            'email' => 'dtucker1@lakeheadu.ca',
        ]);

        factory(App\User::class)->create([
            'name' => 'Daniel Kivi',
            'email' => 'dkkivi@lakeheadu.ca',
        ]);
    }
}