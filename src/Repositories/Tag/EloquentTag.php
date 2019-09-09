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

    /**
     * Get all tag by given type.
     *
     * @param $type
     *
     * @return mixed
     */
    public function findAllByTaggableType($type)
    {
        // TODO: Implement findAllByTaggableType() method.
    }
}