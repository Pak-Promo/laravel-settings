<?php

namespace SnippetCMS\SnippetSettings;

use Illuminate\Support\Facades\Storage;
use SnippetCMS\SnippetSettings\Models\Setting;

class SettingsHelper
{
    use CacheHelper;

    /**
     * Get setting option value.
     *
     * @param  string  $option
     * @param  mixed  $default
     * @return mixed
     */
    public function get(string $option, $default = null)
    {
        $cache = $this->getCache($option);

        if ($cache) {
            return $cache;
        }

        $option = Setting::whereSettingOption($option)->first();
        $value = optional($option)->setting_value;

        if ($default && !$value) {
            return $default;
        }

        $this->setCache($option, $value);

        return $value;
    }

    /**
     * Set setting option value.
     *
     * @param  string  $option
     * @param  mixed  $value
     * @return void
     */
    public function put(string $option, $value)
    {
        $this->setCache($option, $value);

        Setting::updateOrCreate(
            ['option' => $option],
            ['value' => $value],
        );
    }

    /**
     * Delete setting option.
     *
     * @param  string  $option
     * @return void
     */
    public function delete(string $option)
    {
        $this->clearCache($option);
        Setting::whereSettingOption($option)->delete();
    }
}
