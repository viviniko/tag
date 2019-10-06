<?php

namespace Viviniko\Tag\Models;

use Illuminate\Support\Facades\Config;
use Viviniko\Support\Database\Eloquent\Model;

class Tag extends Model
{
    protected $tableConfigKey = 'tag.tags_table';

    protected $fillable = ['name', 'position'];

    public function attachedCount($type = null)
    {
        return \DB::table(Config::get('tag.taggables_table'))->where(array_merge(['tag_id' => $this->id], $type ? ['taggable_type' => $type] : []))->count();
    }

}