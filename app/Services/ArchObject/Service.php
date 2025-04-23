<?php

namespace App\Services\ArchObject;

use App\Models\ArchObject;

class Service
{
    public function store($data) {
        $archObject = ArchObject::create($data);
    }

    public function update(Post $post, $data) {
        $post->update($data);
        $tags = $data['tags'];
        unset($data['tags']);
        $post->tags()->attach($tags);
    }
}
