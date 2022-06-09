@extends('Admin/admin_app')

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Sales Person Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ Route('admin_dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Sales Person Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body ">
                                <a  class="btn btn-dark" href="{{ Route('add_sales_person_email') }}">Create New Email</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                        @if(Session::has('sales_person_email_deleted'))
                                        <div  class="alert alert-success" role ="alert">
                                        {{Session::get('sales_person_email_deleted')}}
                                        </div>
                                        @endif
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($spe as $spes)
                                            <tr>
                                                <td>{{ $spes->sales_person_email }}</td>
                                                <td>
                                                   
                                                    <a class="btn btn-danger" href="/deleteSalesPersonEmail/{{$spes->id}}">Delete</a>
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