<?php

namespace Viviniko\Tag;

use Illuminate\Support\Facades\Config;

trait TagCategoryTrait
{
    public function tags()
    {
        return $this->morphToMany(Config::get('tag.tag'), 'category', Config::get('tag.tag_category_table'))->select(Config::get('tag.tags_table') . '.*');
    }
}