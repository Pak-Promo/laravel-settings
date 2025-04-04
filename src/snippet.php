<?php

if (!function_exists('setting')) {

    /**
     * Get/Set SnippetCMS setting.
     *
     * @return \SnippetCMS\SnippetSettings\SettingHelper
     */
    function setting()
    {
        return app('setting');
    }
}
