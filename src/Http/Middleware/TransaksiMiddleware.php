<?php namespace Bantenprov\Transaksi\Http\Middleware;

use Closure;

/**
 * The TransaksiMiddleware class.
 *
 * @package Bantenprov\Transaksi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TransaksiMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
