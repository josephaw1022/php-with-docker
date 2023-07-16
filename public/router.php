<?php

class Router
{
    private static function load_common_components()
    {
        $common_components = [
            "head" => "views/partials/head.php",
        ];

        foreach ($common_components as $component) {
            require $component;
        }
    }

    public static function load()
    {

        $currentRoutePath = $_SERVER['REQUEST_URI'];

        $routes = require "routes.php";

        self::load_common_components();

        if (array_key_exists($currentRoutePath, $routes)) {
            return require $routes[$currentRoutePath];
        } else {
            return require "pages/404.php";
        }
    }
}


Router::load();