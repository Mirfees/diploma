<?php

namespace App\Services\ArchObject;

use App\Models\ArchObject;

class Service
{
    public function store($data) {
        $archObject = ArchObject::create($data);
    }

    public function update(ArchObject $archObject, $data) {
        $archObject->update($data);
    }
}
