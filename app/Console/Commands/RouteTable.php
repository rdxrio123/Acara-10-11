<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

class RouteTable extends Command
{
    protected $signature = 'route:list';
    protected $description = 'Menampilkan daftar route dalam bentuk tabel rapi';

    public function handle()
    {
        $routes = collect(Route::getRoutes())
            ->filter(function ($route) {
                return !str_contains($route->uri(), '_ignition')
                    && !str_contains($route->uri(), 'sanctum');
            })
            ->map(function ($route) {
                return [
                    'Method' => implode('|', $route->methods()),
                    'URI' => $route->uri(),
                    'Name' => $route->getName() ?? '-',
                    'Action' => $route->getActionName(),
                    'Middleware' => implode(', ', $route->gatherMiddleware()),
                ];
            });

        $this->table(
            ['Method', 'URI', 'Name', 'Action', 'Middleware'],
            $routes
        );

        return Command::SUCCESS;
    }
}