<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function faq(){
        return view('support.faq');
    }


    public function payment(){
        return view('support.payment');
    }

    public function shipment(){
        return view('support.shipment');
    }

    public function feedback(){
        return view('support.feedback');
    }

    public function order_tracking(){
        return view('support.order_tracking');
    }

}
