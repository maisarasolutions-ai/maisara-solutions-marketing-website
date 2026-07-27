<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DetectSegment
{
    public function handle(Request $request, Closure $next): Response
    {
        $segment = $request->query('segment');

        if ($segment) {
            cookie()->queue('segment', $segment, 60 * 24 * 30);
        } else {
            $segment = $request->cookie('segment', 'sovereign');
        }

        $request->attributes->set('segment', $segment);

        return $next($request);
    }
}
