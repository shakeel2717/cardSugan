<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://127.0.0.1:8000/store',
        'https://inittap.asanhub.com/store',
        'https://inittap.asanhub.com/api/payment/*',
        'http://inittap.asanhub.com/api/payment/*',
        'https://inittap.asanhub.com/api/payment/*',
        'http://inittap.asanhub.com/api/payment/*',
        'http://127.0.0.1:8000/api/payment/*',
    ];
}
