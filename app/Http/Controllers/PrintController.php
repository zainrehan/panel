<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrintRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PrintController extends Controller
{
    public function dashboard()
    {
        $requests = PrintRequest::all();
        $accepted = PrintRequest::where([
            ['status', 'accepted'],
            ['vendor_id', Auth::user()->id]
        ]);

        $cancelled = PrintRequest::where([
            ['status', 'cancelled'],
            ['vendor_id', Auth::user()->id]
        ]);
        $pending = PrintRequest::where([
            ['status', 'pending'],
            ['vendor_id', Auth::user()->id]
        ]);
        $users = User::all();
        $data = compact('requests','accepted', 'cancelled', 'users', 'pending');
        return view('home')->with($data);
    }

    public function currentorder(){
        $requests = PrintRequest::all()->reverse();
        $userid = Auth::user()->id;
        $data = compact('requests', 'userid');
        return view('currentorder')->with($data);
    }

    public function cancelledorder(){
        $cancelled = PrintRequest::where('status', '=', 'Cancelled');
        $users = User::all();
        $userid = Auth::user()->id;
        $all = PrintRequest::all();
        $data = compact('cancelled', 'users', 'all', 'userid');
        return view('cancelledorder')->with($data);
    }

    public function orderhistory(){
        $requests = PrintRequest::all();
        $userid = Auth::user()->id;
        $data = compact('requests', 'userid');
        return view('order-history')->with($data);
    }

    public function acceptedorder() {
        $requests = PrintRequest::all();
        $userid = Auth::user()->id;
        $data = compact('requests', 'userid');
        return view('acceptedorder')->with($data);
    }

    public function manageaccount(){
        return view('manage-account');
    }

    public function acceptRequest($id)
    {
        $print_request = PrintRequest::find($id);
        $print_request->status = "accepted";
        
        $print_request->save();

        $requests = PrintRequest::all();
        $data = compact('requests');

        return view('currentorder')->with($data);
    }

    public function cancelRequest($id)
    {
        $print_request = PrintRequest::find($id);
        $print_request->status = "cancelled";
        
        $print_request->save();

        $requests = PrintRequest::all();
        $data = compact('requests');

        return view('currentorder')->with($data);
    }
}
