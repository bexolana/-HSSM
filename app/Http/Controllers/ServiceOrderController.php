<?php

namespace App\Http\Controllers;

use App\Models\ServiceOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceOrderController extends Controller {
    public function get_orders() {
        $orders = ServiceOrder::latest()->get();
        return view( 'Admin.NewOrders', compact( 'orders' ) );
    }

    public function create() {
        return view( 'Admin.NewOrders' );
    }

    public function admin_approve( $id ) {
        $get_request = ServiceOrder::find( $id );
        $logged_user = Auth::id();
        $get_request->approved_by = $logged_user;
        $get_request->save();
    }

    public function admin_reject( $id ) {
        $get_request = ServiceOrder::find( $id );
        $logged_user = Auth::id();
        $get_request->rejected_by = $logged_user;
        $get_request->save();
    }

    public function admin_complete( $id ) {
        $get_request = ServiceOrder::find( $id );
        $logged_user = Auth::id();
        $get_request->completed_by = $logged_user;
        $get_request->is_completed = true;
        $get_request->save();
    }

    public function order_service( Request $request ) {
        $request->validate( [
            'user_id' => 'required|exists:users,id',
            'sms_id' => 'required|exists:social_media_services,id',
            'link' => 'required',
            'quantity' => 'required|integer',
            'FeePerOne' => 'required|numeric',
        ] );

        ServiceOrder::create( $request->all() );
        return redirect()->route( 'service-orders.index' )->with( 'success', 'Service Order created successfully.' );
    }

    public function order_detail ( $order_id ) {
        $get_order = ServiceOrder:: find( $order_id );
        return response()->json( [ 'order_detail'=>$get_order ] );
    }

    public function get_my_orders () {
        $logged_user = Auth::id();
        $my_orders = ServiceOrder:: where( 'user_id', $logged_user )->latest()->get();
        return response()->json( [ 'my_orders'=>$my_orders ] );
    }

    public function edit( ServiceOrder $order ) {
        return view( 'service_orders.edit', compact( 'order' ) );
    }

    public function update( Request $request, ServiceOrder $order ) {
        $request->validate( [
            'link' => 'required',
            'quantity' => 'required|integer',
        ] );

        $order->update( $request->all() );
        return redirect()->route( 'service-orders.index' )->with( 'success', 'Service Order updated successfully.' );
    }

    public function destroy( ServiceOrder $order ) {
        $order->delete();
        return redirect()->route( 'service-orders.index' )->with( 'success', 'Service Order deleted successfully.' );
    }
}