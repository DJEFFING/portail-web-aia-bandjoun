<?php

use App\Http\Middleware\UserHasRole;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route as FacadesRoute;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__ . '/../routes/console.php',
        using: function () {
            FacadesRoute::middleware('web')
                ->group(base_path('routes/web.php'));

            FacadesRoute::middleware('web')
                ->prefix('admin')
                ->group(base_path('routes/admin.php'));
        }
    )->withMiddleware(function (Middleware $middleware) {
        //
        // $middleware->append(UserHasRole::class);
        // $middleware->appendToGroup('role', [UserHasRole::class]);
        $middleware->alias(['role'=>UserHasRole::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
