<?php

namespace App\Http\Controllers;

use App\Models\SellingOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellingOrderController extends Controller {
    public function index() {
        $sellingOrders = SellingOrder::all();
        return view( 'Admin.Sales', compact( 'sellingOrders' ) );
    }

    public function admin_reject( $id ) {
        $sell_ord = SellingOrder::find( $id );
        $sell_ord->delete();
        return view( 'Admin.Sales' );
    }

    public function admin_aprove( $id ) {
        $sell_ord = SellingOrder::find( $id );
        $logged_user = Auth::id();
        $sell_ord->approved_by = $logged_user;
        $sell_ord->save();
        return view( 'Admin.Sales' );
    }

    public function approve_sold( $id ) {
        $sell_ord = SellingOrder::find( $id );
        $sell_ord->is_completed = true;
        $sell_ord->save();
        return view( 'Admin.Sales' );
    }

    public function store( Request $request ) {
        $request->validate( [
            'social_media_id' => 'required|exists:social_medias,id',
            'type' => 'required',
            'link' => 'required',
            'follower_number' => 'required|integer',
            'selling_price' => 'required|numeric',
        ] );
        $logged_user = Auth::id();
        // Get the logged-in user's ID

        // Merge the logged user's ID into the request data
        $data = array_merge( $request->all(), [ 'user_id' => $logged_user ] );

        // Create the SellingOrder with the merged data
        SellingOrder::create( $data );
        return redirect()->route( 'selling-orders.index' )->with( 'success', 'Selling Order created successfully.' );
    }

    public function show( SellingOrder $order ) {
        return view( 'selling_orders.show', compact( 'order' ) );
    }

    public function edit( SellingOrder $order ) {
        return view( 'selling_orders.edit', compact( 'order' ) );
    }

    public function update( Request $request, SellingOrder $order ) {
        $request->validate( [
            'link' => 'required',
            'follower_number' => 'required|integer',
        ] );

        $order->update( $request->all() );
        return redirect()->route( 'selling-orders.index' )->with( 'success', 'Selling Order updated successfully.' );
    }

    public function destroy( SellingOrder $order ) {
        $order->delete();
        return redirect()->route( 'selling-orders.index' )->with( 'success', 'Selling Order deleted successfully.' );
    }
}