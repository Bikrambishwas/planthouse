<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
          'title','slug','short_description','parent','seo_title','seo_description','image'
    ];

    protected static function boot()
    {
        parent::boot();
        // Add global scope to order by position
        static::addGlobalScope('orderByPosition', function (Builder $builder) {
            $builder->orderBy('position');
        });
    }

    public function children()
    {
        return $this->hasMany(Categories::class, 'parent');
    }

    public function parentFeature()
    {
        return $this->belongsTo(Categories::class, 'parent', 'id');
    }
}
