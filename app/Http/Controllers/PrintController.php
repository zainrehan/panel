<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function currentorder(){
        return view('currentorder');
    }

    public function cancelledorder(){
        return view('cancelledorder');
    }

    public function orderhistory(){
        return view('order-history');
    }

    public function manageaccount(){
        return view('manage-account');
    }
}
