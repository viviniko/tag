<?php

namespace Viviniko\Tag\Models;

use Illuminate\Support\Facades\Config;
use Viviniko\Support\Database\Eloquent\Model;

class Tag extends Model
{
    protected $tableConfigKey = 'tag.tags_table';

    protected $fillable = ['name'];
}