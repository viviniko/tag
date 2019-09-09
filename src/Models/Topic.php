<?php

namespace Viviniko\Tag\Models;

use Illuminate\Support\Facades\Config;
use Viviniko\Support\Database\Eloquent\Model;
use Viviniko\Urlrewrite\UrlrewriteTrait;

class Topic extends Model
{
    use UrlrewriteTrait;

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
}