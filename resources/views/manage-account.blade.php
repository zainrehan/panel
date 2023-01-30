@extends('layouts.main')

@section('content')
<div class="content-wrapper">
<div class="container-fluid">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Change Credentials</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('/add-user')}}" method="POST">
            @csrf
            <div class="card-body" style="background-image: url('assets/img/holi-color-background-white-background.jpg')">
                <div class="form-group">
                    <label for="name">Shop Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Shop Name">
                </div>
                <div class="form-group">
                    <label for="server_region">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                </div>
                <div class="form-group">
                    <label for="server_hostname">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="server_username">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmpass" placeholder="Confirm Password">
                </div>

                {{-- <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">Upload</span>
            </div>
          </div>
        </div> --}}
                {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="isPremium" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check If the User is Premium</label>
                </div> --}}
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
