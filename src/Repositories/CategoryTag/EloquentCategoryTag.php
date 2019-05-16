<?php

namespace Viviniko\Tag\Repositories\CategoryTag;

use Illuminate\Support\Facades\Config;
use Viviniko\Repository\EloquentRepository;

class EloquentCategoryTag extends EloquentRepository implements CategoryTagRepository
{
    public function __construct()
    {
        parent::__construct(Config::get('tag.category_tag'));
    }
}