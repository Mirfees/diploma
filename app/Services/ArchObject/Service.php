<?php

namespace App\Services\ArchObject;

use App\Models\ArchObject;

class Service
{
    public function store($data) {
        $tags = $data['tags'];
        unset($data['tags']);
        $archObject = ArchObject::create($data);
        $archObject->tags()->attach($tags);
    }

    public function update(ArchObject $archObject, $data) {
        $tags = $data['tags'];
        unset($data['tags']);
        $archObject->update($data);
        $archObject->tags()->attach($tags);
    }
}
