<?php

use Illuminate\Support\Facades\DB;
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
        $this->command->info('10 Posts created');
        factory(\App\User::class,2)->create();
        $this->command->info('2 user created');
        factory(\App\Comment::class, rand(10, 20))->create();
        $this->command->info('10-20 comments created');
        factory(\App\Tag::class, 5)->create();
        $this->command->info('5 tags created');

        // give each post some tags
        foreach (\App\Post::all() as $post) {
            foreach (\App\Tag::all() as $tag) {
                // each tag has 25% chance to be attached to a post
                if (rand(1,100) > 75) {
                    $post->tags()->attach($tag->id);
                }
            }
        }

        $this->command->info('Tags attached to posts');
    }
}
