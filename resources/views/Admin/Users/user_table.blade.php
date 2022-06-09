@extends('Admin/admin_app')

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Users Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ Route('admin_dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Users Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body ">
                                <a  class="btn btn-dark" href="{{ Route('add_user') }}">Create New User</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                        @if(Session::has('user_deleted'))
                                        <div  class="alert alert-success" role ="alert">
                                        {{Session::get('user_deleted')}}
                                        </div>
                                        @endif
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <a class="btn btn-dark" href="/edit_user/{{$user->id}}">Edit</a>
                                                    <a class="btn btn-danger" href="/deleteUsers/{{$user->id}}">Delete</a>
                                                </td>
                                               
                                            </tr>
                                            @endforeach
                             
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection