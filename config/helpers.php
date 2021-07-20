<?php

if (!function_exists('is_active')) {
    function is_active($route = null)
    {
        return Route::is($route) ? "text-white bg-blue-500 rounded-lg duration-700 hover:bg-blue-800 shadow-2xl" : "text-blue-500 hover:shadow-lg hover:text-blue-700 hover:bg-white hover:border hover:border-gray-400 duration-700 hover:text-blue-600";
    }
}

if (!function_exists('persist_active')) {
    function persist_active($route_one, $route_tow = null)
    {
        if (Route::is($route_one) || Route::is($route_tow)) {
            return "text-white bg-blue-500 rounded-lg duration-700 hover:bg-blue-800 shadow-2xl";
        } else {
            return "text-blue-500 hover:shadow-lg hover:text-blue-700 hover:bg-white hover:border hover:border-gray-700 duration-700 hover:text-blue-600";
        }
    }
}

if (!function_exists('lang_switch')) {
    function lang_switch($locale)
    {
        if (\App::getLocale() == $locale) {
            return "selected";
        }
    }
}
