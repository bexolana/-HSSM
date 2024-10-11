<?php
namespace App\Http\Controllers;

use App\Models\PaymentAgent;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentAgentController extends Controller {
    public function index() {
        $paymentAgents = PaymentAgent::all();
        return view( 'Admin.Payment', compact( 'paymentAgents' ) );
    }

    public function payment_method_creation( Request $request ) {
        $request->validate( [
            'name' => 'required|unique:payment_agents',
            'icon' => 'required',
            'account_number' => 'required',
        ] );

        PaymentAgent::create( $request->all() );
        return response()->json( [
            'payment' => 'successfully created'
        ] );
    }

    public function deposit( Request $request ) {
        $request->validate( [
            'id' => 'required|unique:payment_agents',
            'transaction_amount' => 'required',
            'transaction_code'=>'required',
        ] );
        $logged_user = Auth::id();
        Transaction::create( $request->all(), [ 'user_id'=>$logged_user ] );
        return response()->json( [
            'payment' => 'successfully created'
        ] );
    }

    public function show( $id ) {
        $get_payment = PaymentAgent::find( $id );
        return response()->json( [ 'payment'=>$get_payment ] );
    }

    public function show_balance( $id ) {
        $get_payment = PaymentAgent::find( $id );
        return response()->json( [ 'payment'=>$get_payment ] );
    }

    public function edit_payment( Request $request, PaymentAgent $paymentAgent ) {
        $request->validate( [
            'name' => 'required|unique:payment_agents,name,' . $paymentAgent->id,
            'icon' => 'required',
            'account_number' => 'required',
        ] );

        $paymentAgent->update( $request->all() );
        return redirect()->route( 'Admin.Payment' )->with( 'success', 'Payment Agent updated successfully.' );
    }

    public function delete_payment( PaymentAgent $paymentAgent ) {
        $paymentAgent->delete();
        return redirect()->route( 'Admin.Payment' )->with( 'success', 'Payment Agent deleted successfully.' );
    }
}