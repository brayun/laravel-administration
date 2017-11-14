<?php

if (!function_exists('administration_path')) {
    function administration_path($path = '') {
        return dirname(__DIR__).$path;
    }
}