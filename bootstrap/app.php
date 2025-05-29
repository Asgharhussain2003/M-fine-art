<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function () {
        // Register your middleware here
        app('router')->aliasMiddleware('admin', \App\Http\Middleware\AdminMiddleware::class);
        app('router')->aliasMiddleware('user', \App\Http\Middleware\UserMiddleware::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Custom exception handling
    })
    ->create();
