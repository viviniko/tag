<?php

namespace Viviniko\Tag;

use Illuminate\Support\Facades\Config;

trait Taggable
{
    public function tags()
    {
        return $this->morphToMany(Config::get('tag.tag'), 'taggable', Config::get('tag.taggables_table'))
            ->select(Config::get('tag.tags_table') . '.*');
    }
}