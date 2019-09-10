<?php

namespace Viviniko\Tag;

use Illuminate\Support\Facades\Config;

trait Taggable
{
    private function getTagsByNames($names)
    {
        return collect($names)->map(function ($name) {
            if (is_a($name, $this->getTagModelClass())) {
                return $name;
            }
            return $this->getTagModelClass()::query()->firstOrCreate(['name' => $name]);
        });
    }

    public function tags()
    {
        return $this->morphToMany($this->getTagModelClass(), 'taggable', Config::get('tag.taggables_table'))
            ->select(Config::get('tag.tags_table') . '.*');
    }

    public function attachTags($tags)
    {
        $this->tags()->syncWithoutDetaching($this->getTagsByNames($tags)->pluck('id')->toArray());
    }

    public function detachTags($tags)
    {
        $this->tags()->detach($this->getTagsByNames($tags)->pluck('id')->toArray());
    }

    public function syncTags($tags)
    {
        $this->tags()->sync($this->getTagsByNames($tags)->pluck('id')->toArray());
    }

    public static function bootTaggable()
    {
        static::deleted(function ($model) {
            $model->tags()->detach();
        });
    }

    /**
     * @return \Viviniko\Tag\Models\Tag
     */
    private function getTagModelClass()
    {
        return Config::get('tag.tag');
    }
}