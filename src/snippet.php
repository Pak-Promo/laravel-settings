<?php

if (!function_exists('setting')) {

    /**
     * Get/Set Snippet setting.
     *
     * @return \Snippet\SnippetSettings\SettingHelper
     */
    function setting()
    {
        return app('setting');
    }
}
