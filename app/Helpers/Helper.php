<?php

use App\Models\GeneralSettings;

if (!function_exists('siteInfo')) {
    function siteInfo()
    {
        return GeneralSettings::first();
    }
}
