<?php

namespace Viviniko\Tag\Repositories\Tag;

use Viviniko\Repository\CrudRepository;

interface TagRepository extends CrudRepository
{
    /**
     * Get all tag by given type.
     *
     * @param $type
     *
     * @return mixed
     */
    public function findAllByTaggableType($type);
}