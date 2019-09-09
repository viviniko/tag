<?php

namespace Viviniko\Tag\Models;

use Illuminate\Support\Facades\Config;
use Viviniko\Support\Database\Eloquent\Model;

class Topic extends Model
{
    protected $tableConfigKey = 'tag.topics_table';

    protected $fillable = ['title', 'type', 'tag_id', 'url_rewrite', 'picture_id',
        'meta_title', 'meta_keywords', 'meta_description'];

    public function tag()
    {
        return $this->belongsTo(Config::get('tag.tag'), 'tag_id');
    }

    public function getNameAttribute()
    {
        return $this->tag->name;
    }

    public function category()
    {
        return $this->morphTo();
    }
}