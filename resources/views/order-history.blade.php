@extends('layouts.main')

@section('content')
<div class="content-wrapper">
<div class="container">
    <div class="card">
        <table class="table" style="background-color:rgb(236, 163, 26); color:white">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Number of Copies</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $item)
                @if($item->status != "Pending")
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->customer_name}}</td>
                    <td>{{$item->noOfCopies}}</td>
                    <td>{{$item->color}}</td>
                    <td>{{$item->file}}</td>
                    <td>{{$item->status}}</td>
                </tr>
                @endif
                    
                @endforeach
                {{-- @foreach ($servers as $server)
                    <tr>
                        <td scope="row">{{ $server->server_name }}</td>
                        <td>{{ $server->region }}</td>
                        <td>{{ $server->hostname }}</td>
                        <td>{{ $server->server_username }}</td>
                        <td>{{ $server->server_password }}</td>
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
</div>
</div>
@endsection
