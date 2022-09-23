<?php

namespace Devtical\QrcodeManager\Http\Middleware;

use Devtical\QrcodeManager\QrcodeManager;

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
