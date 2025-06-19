<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
// ArchObject.php
  // Document.php
    public function archObject()
    {
        return $this->belongsTo(ArchObject::class);
    }

}
