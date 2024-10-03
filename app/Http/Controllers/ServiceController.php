<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller {
    public function services() {
        $services = Service::all();
        return response()->json( $services );
    }

    public function create() {
        return view( 'Admin.Service' );
    }

    public function store( Request $request ) {
        $request->validate( [
            'name' => 'required|unique:services',
        ] );

        Service::create( $request->all() );
        return redirect()->route( 'Admin.Service' )->with( 'success', 'Service created successfully.' );
    }

    public function service_detail( $service_id ) {
        $service = Service::find( $service_id );
        return response()->json( [ 'service_detail' =>$service ] );
    }

    public function edit( Service $service ) {
        return view( 'Admin.Service', compact( 'service' ) );
    }

    public function update( Request $request, Service $service ) {
        $request->validate( [
            'name' => 'required|unique:services,name,' . $service->id,
        ] );

        $service->update( $request->all() );
        return redirect()->route( 'services.index' )->with( 'success', 'Service updated successfully.' );
    }

    public function destroy( Service $service ) {
        $service->delete();
        return redirect()->route( 'services.index' )->with( 'success', 'Service deleted successfully.' );
    }
}