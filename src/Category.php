<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_category_id',
        'name_en',
        'name_ar',
        'image',
        'icon',
        'sort_order',
        'description_en',
        'description_ar',
        'catable_id',
        'catable_type',
        'is_active',
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }
}