@extends('Admin/admin_app')

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit User</h1>
                        <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ Route('admin_dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ Route('user_table') }}">User Table</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
                        <div class="card mb-4">
                        @if(Session::has('user_updated'))

<div class="alert alert-success" role ="alert">
    {{Session::get('user_updated')}}
</div>

    @endif
                       
                            <div class="card-body">
                            <form method="post" action="{{ route('user.updated')}}">
                            @csrf
                            <input type="hidden" value="{{$users->id}}" class="form-control"   name="id" >

                                        
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" name ="name" value="{{$users->name}}" id="inputFirstName" type="text" placeholder="Enter first name" />
                                                    </div>
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        @endif
                                               
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" name="email" value="{{$users->email}}" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            </div>
                                            @if ($errors->has('email'))
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                            <div class="form-row">
                                               
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                    <button class="btn btn-primary btn-block" type="submit">Update Account</button>
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