<?php

namespace SnippetCMS\SnippetSettings;

use Illuminate\Support\Facades\Cache;

trait CacheHelper
{
    /**
     * Add prefix to settings option.
     *
     * @param  string  $option
     * @return string
     */
    private function addPrefixToOption(string $option): string
    {
        $prefix = config('snippet-settings.prefix');

        return $prefix . $option;
    }
    /**
     * 
     * Get cache.
     *
     * @param  string  $option
     * @return mixed|void
     */
    public function getCache(string $option)
    {
        if (!config('snippet-settings.cache')) {
            return;
        }

        return Cache::get($this->addPrefixToOption($option));
    }

    /**
     * Set cache.
     *
     * @param  string  $option
     * @param  mixed  $value
     * @return void
     */
    public function setCache(string $option, $value)
    {
        if (!config('snippet-settings.cache')) {
            return;
        }

        Cache::put($this->addPrefixToOption($option), $value);
    }

    /**
     * Clear cache.
     *
     * @param  string  $option
     * @return void
     */
    public function clearCache(string $option)
    {
        if (!config('snippet-settings.cache')) {
            return;
        }

        Cache::forget($this->addPrefixToOption($option));
    }
}
