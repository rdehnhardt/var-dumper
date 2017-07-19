<?php

if (!function_exists('dd')) {
    function dd()
    {
        array_map(function ($x) {
            (new Rdehnhardt\Debug\Dumper)->dump($x);
        }, func_get_args());
        die(1);
    }
}

if (!function_exists('d')) {
    function d()
    {
        array_map(function ($x) {
            (new Rdehnhardt\Debug\Dumper)->dump($x);
        }, func_get_args());
    }
}