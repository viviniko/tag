<?php

namespace Viviniko\Tag\Observers;

use Illuminate\Support\Facades\Config;
use Viviniko\Tag\Models\Tag;

class TagObserver
{
    public function deleting(Tag $tag)
    {
        \DB::table(Config::get('tag.taggables_table'))->where('tag_id', $tag->id)->delete();
    }
}