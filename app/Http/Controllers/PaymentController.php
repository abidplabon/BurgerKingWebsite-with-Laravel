<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    function payment(){
        return view('payment');
    }

    function verify_payment(Request $request,$transaction_id){
        $request->session()->put('transaction_id',$transaction_id);
        return redirect('/complete_payment');
    }

    function complete_payment(){
        
    }
}
