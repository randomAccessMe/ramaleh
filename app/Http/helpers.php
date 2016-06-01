<?php

if ( ! function_exists('cdn')) {
    function cdn($asset)
    {
        return env('CDN_URI') . $asset;
    }
}

if ( ! function_exists('strReplaceAssoc')) {
    function strReplaceAssoc(array $replace, $subject)
    {
        return str_replace(array_keys($replace), array_values($replace), $subject);
    }
}

if ( ! function_exists('routeIs')) {
    function routeIs($route_name)
    {
        return request()->route()->getName() == $route_name;
    }
}

