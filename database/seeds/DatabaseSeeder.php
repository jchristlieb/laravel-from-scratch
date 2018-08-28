<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Post::class, 10)->create();
        factory(\App\User::class,2)->create();
        factory(\App\Comment::class, rand(10, 20))->create();
    }
}
