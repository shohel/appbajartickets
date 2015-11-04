<?php

namespace Mhshohel\Appbajarticket\Middleware;

use \Closure;
use Mhshohel\Appbajarticket\Models\Agent;

class IsAgentMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Agent::isAgent() || Agent::isAdmin()) {
            return $next($request);
        }
        return redirect()->action('\Mhshohel\Appbajarticket\Controllers\TicketsController@index')
            ->with('warning', 'You are not permitted to access this page!');
    }

}