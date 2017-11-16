<?php

if (!function_exists('administration_path')) {
    function administration_path($path = '') {
        return dirname(__DIR__).DIRECTORY_SEPARATOR.$path;
    }
}


if (!function_exists('routes_path')) {
    function routes_path($path = '') {
        return base_path('routes'.DIRECTORY_SEPARATOR.$path);
    }
}
