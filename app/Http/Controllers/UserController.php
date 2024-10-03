<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller {
    function login() {
        return view( 'auth.login' );
    }

    public function post_credential( Request $request ) {
        // Validate request input
        $validator = Validator::make( $request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:3'
        ] );

        // If validation fails, return error messages
        if ( $validator->fails() ) {
            return response()->json( [
                'success' => false,
                'errors' => $validator->errors(), // Include specific validation errors
            ] );
        }
        $credentials = $request->only( 'email', 'password' );

        try {
            // Attempt to generate a token using JWTAuth
            if ( !$token = JWTAuth::attempt( $credentials ) ) {
                return response()->json( [
                    'success' => false,
                    'message' => 'Invalid credentials',
                ], 400 );
            }
            return response()->json( [
                'success' => true,
                'token' =>$token

            ] );
        } catch ( Exception $e ) {
            // Handle JWT exception and convert message to string
            return response()->json( [
                'success' => false,
                'message' => $e->getMessage() // Convert exception message to string
            ], 500 );
        }
        // Return the token and user data after successful login

    }

    public function web_login( Request $request ) {
        // Validate the request inputs
        $request->validate( [
            'email' => 'required|email',
            'password' => 'required|min:3',
        ] );

        $credentials = $request->only( 'email', 'password' );

        // Attempt to log the user in using Laravel's built-in Auth::attempt()
        if (Auth::attempt($credentials)) {
            // If successful, redirect the user to the intended page or dashboard
           
            return redirect()->intended('dashboard')->with('success', 'You are logged in!');
        }
    
        // If unsuccessful, redirect back to login page with error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->except('password'));
    }
    public function logout(Request $request)
    {
        $logged_user = Auth::id();
        dd($logged_user);
        // Check if it's an API request
        if ( $request->is( 'api/*' ) ) {
            try {
                // Get the token from the request
                $token = $request->bearerToken();

                if ( !$token ) {
                    return response()->json( [ 'success' => false, 'message' => 'Token not provided.' ], 401 );
                }

                // Invalidate the token
                JWTAuth::invalidate( $token );

                return response()->json( [ 'success' => true, 'message' => 'Successfully logged out.' ] );
            } catch ( JWTException $e ) {
                return response()->json( [ 'success' => false, 'message' => 'Failed to log out, token cannot be invalidated.' ], 500 );
            }
        } else {
            // Handle web logout
            Auth::logout();
            // Log out the user

            // Invalidate the session and regenerate the session ID
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect( '/login' )->with( 'success', 'You have been logged out successfully.' );
        }
    }

    public function get_user() {
        $logged_user = Auth::id();
        $user = User::find( $logged_user );
        return response()->json( [ 'user'=>$logged_user ] );
    }

    public function index() {
        $users = User::all();
        return view( 'Admin.UserList', compact( 'users' ) );
    }

    public function createUser( Request $request ) {
        $token = $request->session()->token();
        $token = csrf_token();
        // Extract data from the request
        $userData = [
            'name' => $request->input( 'name' ),
            'email' => $request->input( 'email' ),
            'phone' => $request->input( 'phone' ),
            'password' => $request->input( 'password' ),
        ];

        // Send POST request to Node.js API
        $response = Http::post( 'http://localhost:3000/api/users/register', $userData );

        // Decode JSON response
        $data = $response->json();

        // Pass data to the view or redirect as needed
        return view( 'Landing.quizzes', compact( 'data' ) );
    }
}
