@extends('layouts.main')

@section('content')
<div class="content-wrapper">
<div class="container">

    <div class="card">
        <table class="table">
            <thead style="background-color:cornflowerblue ; color:white">
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Number of Copies</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($requests as $request )
                hello
                    
                @endforeach --}}

                @foreach ($requests as $request)
                @if($request->status == 'pending')
                    @if($request->vendor_id == $userid)
                    <tr> 
                        <td scope="row">{{$request->id}}</td>
                        <td> {{$request->customer_name}}</td>
                        <td> {{$request->noOfCopies}}</td>
                        <td> {{$request->size}}</td>
                        <td> {{$request->color}}</td>
                        <td> <span class="badge badge-warning">Pending</span></td>
                        <td>
                            <a href="{{url('/accept-request')}}/{{$request->id}}"><button type="button" class="btn btn-success"><i class="nav-icon fa fa-check"></i></button></a>
                            <a href="{{url('/cancel-request')}}/{{$request->id}}"><button type="button" class="btn btn-danger"><i class="nav-icon fa fa-ban"></i></button></a>
                        </td>
                    </tr>
                    @endif
            @endif
                @endforeach
                    
                

                {{-- @foreach ($requests as $request)
                    <tr>
                        <td scope="row">{{ $request->customer_name }}</td>
                        <td>{{ $request->id }}</td>
                        <td>{{ $request->id}}</td>
                        <td>{{ $request->id }}</td>
                        <td>{{ $request->id }}</td>
                        <td>{{ $server->flag_code }}</td>
                        <td>
                            @if ($server->premium_server)
                                Premium
                            @else
                                Free
                            @endif
                        </td>
                        <td>
                            @if ($server->isActive)
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">InActive</span>
                            @endif

                        </td>
                        <td>
                            <a href="{{url('/delete-server')}}/{{$server->id}}">
                                <button class="btn btn-danger"> Delete</button>
                            </a>
                            <a href="{{url('update-server')}}/{{$server->id}}" method="post">
                                <button class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
</div>
</div>
@endsection
