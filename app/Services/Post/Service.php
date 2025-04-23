<?php

namespace App\Services\Post;

use App\Models\Post;

class Service
{
    public function store($data) {
        $tags = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);
        $post->tags()->attach($tags);
    }

    public function update(Post $post, $data) {
        $post->update($data);
        $tags = $data['tags'];
        unset($data['tags']);
        $post->tags()->attach($tags);
    }
}
