<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller {
    public function index() {
        // $socialMedias = SocialMedia::all();
        return view( 'Admin.SMCreateionPage' );
    }

    public function social_media_creation( Request $request ) {
        $name = $request->input( 'name' );
        $name = $request->file( 'icon' );
        return view( 'social_medias.create' );
    }

    public function create_social_media( Request $request ) {
        $request->validate( [
            'name' => 'required|unique:social_medias',
            'icon' => 'required|file',
            'price' => 'required|integer'
        ] );

        SocialMedia::create( $request->all() );
        return redirect()->route( 'social-medias.index' )->with( 'success', 'Social Media created successfully.' );
    }

    public function show( SocialMedia $socialMedia ) {
        return view( 'social_medias.show', compact( 'socialMedia' ) );
    }

    public function update( Request $request, SocialMedia $socialMedia ) {
        $request->validate( [
            'name' => 'required|unique:social_medias,name,' . $socialMedia->id,
            'icon' => 'required',
        ] );

        $socialMedia->update( $request->all() );
        return redirect()->route( 'social-medias.index' )->with( 'success', 'Social Media updated successfully.' );
    }

    public function delete_sm( SocialMedia $socialMedia ) {
        $socialMedia->delete();
        return redirect()->route( 'social-medias.index' )->with( 'success', 'Social Media deleted successfully.' );
    }
}