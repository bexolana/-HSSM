<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Log;
// Make sure to import the Log facade

class CheckMultipleGuards {

    public function handle( $request, Closure $next ) {
        // Check if the user is authenticated via the web guard
        if ( Auth::guard( 'web' )->check() ) {
            return $next( $request );
        }

        // Check if the user is authenticated via the API guard ( JWT )
        try {
            if ( JWTAuth::parseToken()->authenticate() ) {
                return $next( $request );
            }
        } catch ( JWTException $e ) {
            // Handle JWT exceptions ( log them if necessary )
        }

        return response()->json( [ 'error' => 'Unauthorized' ], 401 );
    }

}