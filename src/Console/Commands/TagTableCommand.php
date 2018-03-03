<?php

namespace Viviniko\Tag\Console\Commands;

use Viviniko\Support\Console\CreateMigrationCommand;

class TagTableCommand extends CreateMigrationCommand
{
    /**
     * @var string
     */
    protected $name = 'tag:table';

    /**
     * @var string
     */
    protected $description = 'Create a migration for the tag service table';

    /**
     * @var string
     */
    protected $stub = __DIR__.'/stubs/tag.stub';

    /**
     * @var string
     */
    protected $migration = 'create_tag_table';
}
