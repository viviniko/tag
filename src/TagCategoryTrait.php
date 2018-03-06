<?php

namespace Viviniko\Tag;

use Illuminate\Support\Facades\Config;

trait TagCategoryTrait
{
    public function tags()
    {
        return $this->morphToMany(Config::get('tag.tag'), 'category', Config::get('tag.tag_category_table'))
            ->withPivot(['category_id', 'category_type', 'tag_id', 'url_rewrite', 'meta_title', 'meta_keywords', 'meta_description'])
            ->select(Config::get('tag.tags_table') . '.*');
    }
}