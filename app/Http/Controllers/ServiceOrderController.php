<?php

namespace App\Http\Controllers;

use App\Models\ServiceOrder;
use App\Models\SocialMediaService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceOrderController extends Controller {
    public function get_orders() {

        // Check if the user is logged in
        $logged_user = Auth::id();
        //
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
        $get_the_user = $get_request->user_id;
        $service_fee = $get_request->quantity * $get_request->socialMediaService->FeePerOne;
        $user = User::find( $get_the_user );
        $prev_balance = $user->balance;
        $total_balance = $prev_balance + $service_fee;
        $user->balance = $total_balance;
        $get_request->save();
        $user->save();
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
            'sms_id' => 'required|exists:social_media_services,social_media_id',
            'link' => 'required',
            'quantity' => 'required|integer',
        ] );
        $logged_user = Auth::id();
        $quantity = $request->input( 'quantity' );
        $get_social_media = SocialMediaService::find( $request->input( 'sms_id' ) );
        $price_per_one = $get_social_media->FeePerOne;
        $service_fee = $price_per_one *  $quantity;
        $data = $request->all();
        $data[ 'user_id' ] = $logged_user;
        ServiceOrder::create( $data );
        $logged_user = Auth::id();
        $user = User::find( $logged_user );
        $prev_balance = $user->balance;
        if ( $prev_balance<$service_fee ) {
            return response()->json( [ 'Error'=>'Your balance is low, so you cannot get the service' ] );
        }
        $total_balance = $prev_balance - $service_fee;
        $user->balance = $total_balance;
        $user->save();
        // Reduce Balance
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