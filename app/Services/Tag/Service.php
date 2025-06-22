<?php

namespace App\Services\Tag;

use App\Models\Tag;

class Service
{
    public function store($data) {
        $tag = Tag::create($data);
    }

    public function update(Tag $tag, $data) {
        $tag->update($data);
    }
}
