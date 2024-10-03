<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller {
    public function get_users_balance( $id ) {
        $get_users_balance = Transaction::where( 'user_id', $id )->get()->first();
        return response()->json( [ 'user_balance'=>$get_users_balance ] );
    }

    public function transaction_list() {
        $list = Transaction::whereNull( 'approved_by' )->latest()->get();
        return view( 'Admin.NewTransaction' );
    }

    public function admin_approve( Request $request, $id ) {
        $amnt = $request->input( 'corrected_amnt' );
        $get_request = Transaction::find( $id );
        $logged_user = Auth::id();
        $get_request->approved_by = $logged_user;
        $get_request->deposite_amount = $amnt;
        // NOTIFICATION HERE FOR CUSTOMER
        $get_request->save();
    }

    public function admin_reject( Request $request, $id ) {
        $reason = $request->reason;
        $get_request = Transaction::find( $id );
        $logged_user = Auth::id();
        $get_request->approved_by = $logged_user;
        $get_request->reject_reason = $reason;
        $get_request->save();
    }

    public function index() {
        $transactions = Transaction::all();
        return view( 'transactions.index', compact( 'transactions' ) );
    }

    public function create() {
        return view( 'transactions.create' );
    }

    public function store( Request $request ) {
        $request->validate( [
            'user_id' => 'required|exists:users,id',
            'deposite_amount' => 'required|numeric',
            'transaction_code' => 'required|unique:transactions',
            'payment_agent_id' => 'required|exists:payment_agents,id',
        ] );

        Transaction::create( $request->all() );
        return redirect()->route( 'transactions.index' )->with( 'success', 'Transaction created successfully.' );
    }

    public function show( Transaction $transaction ) {
        return view( 'transactions.show', compact( 'transaction' ) );
    }

    public function edit( Transaction $transaction ) {
        return view( 'transactions.edit', compact( 'transaction' ) );
    }

    public function update( Request $request, Transaction $transaction ) {
        $request->validate( [
            'deposite_amount' => 'required|numeric',
            'transaction_code' => 'required|unique:transactions,transaction_code,' . $transaction->id,
        ] );

        $transaction->update( $request->all() );
        return redirect()->route( 'transactions.index' )->with( 'success', 'Transaction updated successfully.' );
    }

    public function destroy( Transaction $transaction ) {
        $transaction->delete();
        return redirect()->route( 'transactions.index' )->with( 'success', 'Transaction deleted successfully.' );
    }
}