<?php

namespace Viviniko\Tag\Services;

use Viviniko\Tag\Contracts\TagService as TagServiceInterface;
use Viviniko\Tag\Repositories\Tag\TagRepository;

class TagServiceImpl implements TagServiceInterface
{
    /**
     * @var \Viviniko\Tag\Repositories\Tag\TagRepository
     */
    protected $tagRepository;

    /**
     * TagService constructor.
     * @param \Viviniko\Tag\Repositories\Tag\TagRepository
     */
    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }
}