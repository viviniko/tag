<?php

namespace Viviniko\Tag\Models;

use Viviniko\Support\Database\Eloquent\Model;

class Tag extends Model
{
    protected $tableConfigKey = 'tag.tags_table';

    protected $fillable = ['name', 'url_rewrite', 'meta_title', 'meta_keywords', 'meta_description'];
}