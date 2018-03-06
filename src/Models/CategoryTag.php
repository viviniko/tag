<?php

namespace Viviniko\Tag\Models;

use Illuminate\Support\Facades\Config;
use Viviniko\Support\Database\Eloquent\Model;

class CategoryTag extends Model
{
    public $timestamps = false;

    protected $tableConfigKey = 'tag.tag_category_table';

    protected $fillable = ['category_id', 'category_type', 'tag_id', 'url_rewrite', '', 'meta_title', 'meta_keywords', 'meta_description'];

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