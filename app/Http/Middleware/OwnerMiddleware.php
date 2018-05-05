<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\OwnerMiddleware as Middleware;

class OwnerMiddleware extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
