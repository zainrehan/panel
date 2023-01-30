<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrintRequest;
use App\Models\User;

class PrintController extends Controller
{
    public function dashboard()
    {
        $requests = PrintRequest::all();
        $accepted = PrintRequest::where('status', '=', 'Accepted');
        $cancelled = PrintRequest::where('status', '=', 'Cancelled');
        $pending = PrintRequest::where('status', '=', 'Pending');
        $users = User::all();
        $data = compact('requests','accepted', 'cancelled', 'users', 'pending');
        return view('home')->with($data);
    }

    public function currentorder(){
        $requests = PrintRequest::all();
        $data = compact('requests');
        return view('currentorder')->with($data);
    }

    public function cancelledorder(){
        $cancelled = PrintRequest::where('status', '=', 'Cancelled');
        $users = User::all();
        $all = PrintRequest::all();
        $data = compact('cancelled', 'users', 'all');
        return view('cancelledorder')->with($data);
    }

    public function orderhistory(){
        $requests = PrintRequest::all();
        $data = compact('requests');
        return view('order-history')->with($data);
    }

    public function manageaccount(){
        return view('manage-account');
    }
}
