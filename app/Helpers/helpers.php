<?php

use Illuminate\Support\Facades\Request;

if (!function_exists('active_class')) {
    function active_class($path)
    {
        return Request::is($path) ? 'active' : '';
    }
}

if (!function_exists('is_active_route')) {
    function is_active_route($path)
    {
        return Request::is($path) ? 'active' : '';
    }
}

if (!function_exists('show_class')) {
    function show_class($path)
    {
        return Request::is($path) ? 'show' : '';
    }
}