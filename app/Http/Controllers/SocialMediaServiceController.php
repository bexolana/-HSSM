<?php

namespace App\Http\Controllers;

use App\Models\SocialMediaService;
use Illuminate\Http\Request;

class SocialMediaServiceController extends Controller {
    public function index() {
        $socialMediaServices = SocialMediaService::all();
        return view( 'social_media_services.index', compact( 'socialMediaServices' ) );
    }

    public function create() {
        return view( 'social_media_services.create' );
    }

    public function sm_service_create( Request $request ) {
        $request->validate( [
            'social_media_id' => 'required|exists:social_medias,id',
            'service_name' => 'required',
            'max_number' => 'required|integer',
            'min_number' => 'required|integer',
            'start_time' =>'required|date',
            'description' =>'required|string',
            'FeePerOne' => 'required|numeric',
        ] );

        SocialMediaService::create( $request->all() );
        return redirect()->route( 'social-media-services.index' )->with( 'success', 'Social Media Service created successfully.' );
    }

    public function show( SocialMediaService $socialMediaService ) {
        return view( 'social_media_services.show', compact( 'socialMediaService' ) );
    }

    public function update( Request $request, SocialMediaService $socialMediaService ) {
        $request->validate( [
            'social_media_id' => 'required|exists:social_medias,id',
            'service_name' => 'required',
            'max_number' => 'required|integer',
            'min_number' => 'required|integer',
            'start_time' =>'required|date',
            'description' =>'required|string',
            'FeePerOne' => 'required|numeric',
        ] );
        $socialMediaService->update( $request->all() );
        return redirect()->route( 'social-media-services.index' )->with( 'success', 'Social Media Service updated successfully.' );
    }

    public function destroy( SocialMediaService $socialMediaService ) {
        $socialMediaService->delete();
        return redirect()->route( 'social-media-services.index' )->with( 'success', 'Social Media Service deleted successfully.' );
    }
}