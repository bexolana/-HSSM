<?php

namespace App\Http\Controllers\Landing;

use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;

class LandingController extends Controller {
    function index() {
        return view( 'Landing.login' );
    }

    public function post_credential( Request $request ) {
        return response()->json( [
            'success' => false,
            'message' => 'Invalid credentials'
        ], 400 );
        $validator = Validator::make( $request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ] );

        if ( $validator->fails() ) {
            return response()->json( [
                'success' => false,
                'errors' => 'Credential is Required',
            ] );
        }
        return response()->json( [
            'success' => $request->email,
            'message' => 'Invalid credentials'
        ], 400 );
        $credentials = $request->only( 'phone', 'password' );
        try {
            if ( !$token = JWTAuth::attempt( $credentials ) ) {
                return response()->json( [
                    'success' => false,
                    'message' => 'Invalid credentials'
                ], 400 );
            }
            $user = Auth::user();
        } catch ( JWTException $e ) {
            return response()->json( [
                'success' => false,
                'message' => 'Could not create token'
            ], 500 );
        }
        // Return the token after successful login
        return response()->json( [
            'success' => true,
            'token' => $token,
            'user' => $user // Optional: include user details if needed
        ], 200 );
    }

    function about() {
        return view( 'Landing.about' );
    }

    function contactus() {
        return view( 'Landing.contactus' );
    }

    function login() {
        return view( 'auth.login' );
    }

}

