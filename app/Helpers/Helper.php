<?php

use App\Models\Campains;
use App\Models\Deals;
use App\Models\GeneralSettings;
use Brian2694\Toastr\Facades\Toastr;

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

if (!function_exists('activeCampains')) {
    function activeCampains()
    {
        return Campains::where('status', 1)->orderBy('id', 'DESC')->get();
    }
}

if (!function_exists('activeDeals')) {
    function activeDeals()
    {
        return Deals::where('status', 1)->orderBy('id', 'DESC')->get();
    }
}

if (!function_exists('toastNofication')) {
    /**
     * Set toast message
     *
     * @param String $type
     * @param String $message
     * @return void
     */
    function toastNofication($type, $message)
    {
        try {
            Toastr::$type($message);
        } catch (\Exception $e) {
            dd($e);
        } catch (\Error $e) {
            dd($e);
        }
    }
}
