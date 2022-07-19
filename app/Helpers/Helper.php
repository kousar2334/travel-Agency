<?php

use App\Models\GeneralSettings;

if (!function_exists('siteInfo')) {
    function siteInfo()
    {
        return GeneralSettings::first();
    }
}

if (!function_exists('setEnvironmentValue')) {
    function setEnvironmentValue($name, $value)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                $name . '=' . env($name),
                $name . '=' . $value,
                file_get_contents($path)
            ));
        }
    }
}
