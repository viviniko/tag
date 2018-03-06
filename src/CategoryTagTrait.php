<?php

namespace Viviniko\Tag;

use Illuminate\Support\Facades\Config;

trait CategoryTagTrait
{
    public function tags()
    {
        return $this->morphMany(Config::get('tag.category_tag'), 'category', Config::get('tag.tag_category_table'))
            ->select(Config::get('tag.tag_category_table') . '.*');
    }
}