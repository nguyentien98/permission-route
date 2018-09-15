<?php 

namespace App\Helpers;

use Route;

trait Permission
{
    public function getAllRoute($prefix = 'admin')
    {
        if (!$prefix) {
            return null;
        }

        $all_routes = [];
        foreach (Route::getRoutes() as $route) {
            if (starts_with($route->getName(), 'admin')) {
                $all_routes[] = $route->getName();
            }
        }

        return $all_routes;
    }
}
