<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArchObject extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;

    protected $table = 'arch_objects';
    protected $guarded = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'arch_object_tags', 'tag_id', 'arch_object_id');
    }

    protected $casts = [
        'documents' => 'array',
    ];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }


}
