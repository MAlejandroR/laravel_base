<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateHeaderMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->headers->get('Accept') !== "application/vnd.api+json")
            return response()->json([
                "errors" => [
                    "status"=> "406", //Cada código
                    "title"=>"Not Acceptable", //En función del código
                    "details"=> "Header without Accept concept"
                ]

            ],406);

        return $next($request);
    }
}
