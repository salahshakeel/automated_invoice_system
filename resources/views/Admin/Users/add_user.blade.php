@extends('Admin/admin_app')

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add New User</h1>
                        <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ Route('admin_dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ Route('user_table') }}">User Table</a></li>
                            <li class="breadcrumb-item active">Add New User</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            @if(Session::has('user_created'))
                                        <div  class="alert alert-success" role ="alert">
                                        {{Session::get('user_created')}}
                                        </div>
                                        @endif
                            <form method = "POST" action="{{ route('user.registration') }}">
                            @csrf

                                        
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" name="name" id="inputFirstName" type="text" placeholder="Enter first name" />
                                                    </div>
                                                    @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                               
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" name ="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            </div>
                                            @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    @endif
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
                                                    </div>
                                                </div>
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    @endif
                                               
                                               
                                            </div>
                                            <div class="form-row">
                                            <div class="col-md-2">
                                                    <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block" >Create Account</button>
                                                    </div>
                                                </div>
</div>
                                            
                                           
                                           
                                        </form>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                      
                    </div>
                </main>
                @endsection