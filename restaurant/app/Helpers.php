<?php


use Illuminate\Support\Facades\Route;

///**
// * Created by PhpStorm.
// * User: pirat
// * Date: 6/26/2019
// * Time: 10:23 PM
// */
function isActiveRoute($route, $output = "active")
{
    if (Route::currentRouteName() == $route) return $output;
}

function areActiveRoutes(Array $routes, $output = "active")
{
    foreach ($routes as $route) {
        if (Route::currentRouteName() == $route) return $output;
    }
}
