<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class ArchObject extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;

    protected $table = 'arch_objects';
    protected $guarded = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'arch_object_tags', 'arch_object_id', 'tag_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function scopeFilter(Builder $query, $filters = [])
    {
        if (empty($filters)) {
            return $query;
        }

        // Пример логики:
        if (!empty($filters['search'])) {
            $query->where(function ($q) use ($filters) {
                $q->where('title', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('content', 'like', '%' . $filters['search'] . '%');
            });
        }

        if (!empty($filters['category'])) {
            $query->where('category_id', $filters['category']);
        }

        if (!empty($filters['tag'])) {
            $query->whereHas('tags', function ($q) use ($filters) {
                $q->whereIn('id', (array) $filters['tag']);
            });
        }

        if (!empty($filters['date_from'])) {
            $query->whereDate('created_at', '>=', $filters['date_from']);
        }

        if (!empty($filters['date_to'])) {
            $query->whereDate('created_at', '<=', $filters['date_to']);
        }

        return $query;
    }

    protected $casts = [
        'documents' => 'array',
    ];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }


}
