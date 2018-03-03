<?php

namespace Viviniko\Tag\Repositories\Tag;

use Viviniko\Repository\SimpleRepository;

class EloquentTag extends SimpleRepository implements TagRepository
{
    protected $modelConfigKey = 'tag.tag';

    protected $fieldSearchable = ['id', 'name'];

    /**
     * {@inheritdoc}
     */
    public function findByName($name)
    {
        return $this->createModel()->where('name', $name)->first();
    }

    /**
     * {@inheritdoc}
     */
    public function lists($column = 'name', $key = null)
    {
        return $this->pluck($column, $key);
    }
}