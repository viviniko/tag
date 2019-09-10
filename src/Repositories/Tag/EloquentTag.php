<?php

namespace Viviniko\Tag\Repositories\Tag;

use Illuminate\Support\Facades\Config;
use Viviniko\Repository\EloquentRepository;

class EloquentTag extends EloquentRepository implements TagRepository
{
    public function __construct()
    {
        parent::__construct(Config::get('tag.tag'));
    }
}