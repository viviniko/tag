<?php

namespace Viviniko\Tag;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Viviniko\Tag\Console\Commands\TagTableCommand;
use Viviniko\Tag\Models\Tag;
use Viviniko\Tag\Observers\TagObserver;

class TagServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config files
        $this->publishes([
            __DIR__.'/../config/tag.php' => config_path('tag.php'),
        ]);

        // Register commands
        $this->commands('command.tag.table');

        Tag::observe(TagObserver::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/tag.php', 'tag');

        $this->registerRepositories();

        $this->registerCommands();
    }

    public function registerRepositories()
    {
        $this->app->singleton(
            \Viviniko\Tag\Repositories\Tag\TagRepository::class,
            \Viviniko\Tag\Repositories\Tag\EloquentTag::class
        );
    }

    /**
     * Register the artisan commands.
     *
     * @return void
     */
    private function registerCommands()
    {
        $this->app->singleton('command.tag.table', function ($app) {
            return new TagTableCommand($app['files'], $app['composer']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
        ];
    }
}