<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(20)->create();

        $tags = Tag::factory(40)->create();
        $tagIds = $tags->pluck('id');
        $posts = Post::factory(100)->create();
        User::factory()->create();

        foreach ($posts as $post) {
            $randomIds = $tagIds->random(5);

            $post->tags()->attach($randomIds);
        }
    }
}
