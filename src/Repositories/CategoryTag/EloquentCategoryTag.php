<?php

namespace Viviniko\Tag\Repositories\CategoryTag;

use Viviniko\Repository\SimpleRepository;

class EloquentCategoryTag extends SimpleRepository implements CategoryTagRepository
{
    protected $modelConfigKey = 'tag.category_tag';
}