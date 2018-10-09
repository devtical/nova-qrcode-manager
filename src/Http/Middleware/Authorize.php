<?php

namespace Kristories\QrcodeManager\Http\Middleware;

use Kristories\QrcodeManager\QrcodeManager;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(QrcodeManager::class)->authorize($request) ? $next($request) : abort(403);
    }
}
