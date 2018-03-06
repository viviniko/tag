<?php

namespace Viviniko\Tag\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TagCategory extends Pivot
{
    public $timestamps = false;

    protected $fillable = [
        'category_id', 'category_type', 'tag_id', 'url_rewrite', 'meta_title', 'meta_keywords', 'meta_description'
    ];

    public function category()
    {
        return $this->morphTo();
    }
}