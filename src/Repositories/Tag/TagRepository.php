<?php

namespace Viviniko\Tag\Repositories\Tag;

use Viviniko\Repository\CrudRepository;

interface TagRepository extends CrudRepository
{
    /**
     * Get manufacturer by given name.
     *
     * @param $name
     *
     * @return mixed
     */
    public function findByName($name);
}