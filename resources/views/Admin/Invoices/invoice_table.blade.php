@extends('Admin/admin_app')

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Invoice Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ Route('admin_dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Invoice Tables</li>
                        </ol>
                       
                        <div class="card mb-4">
                        @if(Session::has('invoice_deleted'))
                                        <div  class="alert alert-success" role ="alert">
                                        {{Session::get('invoice_deleted')}}
                                        </div>
                                        @endif
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                                <th>PAYMENT TYPE</th>
                                                <th>PROJECT TITLE</th>
                                                <th>AMOUNT</th>
                                
                                                <th>BRAND</th>
                                                <th>CUSTOMER EMAIL</th>
                                                <th>CREATED AT</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>PAYMENT TYPE</th>
                                                <th>PROJECT TITLE</th>
                                                <th>AMOUNT</th>
                                      
                                                <th>BRAND</th>
                                                <th>CUSTOMER EMAIL</th>
                                                <th>CREATED AT</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($invoice as $inv)
                                            <tr>
                                                <td>{{ $inv->id }}</td>
                                                <td>{{ $inv->payement_type }}</td>
                                                <td>{{ $inv->project_title }}</td>
                                                <td>{{ $inv->amount }}</td>
                                       
                                                <td>
                                                    <img src=" {{ $inv->brand }}" height="80" width="80"> </img>
                                                   </td>
                                                <td>{{ $inv->customer_email }}</td>
                                               
                                                <td>{{ $inv->created_at }}</td>
                                                <td>
                                                <a class="btn btn-danger" href="/deleteInvoice/{{$inv->id}}">Delete</a>
                                                
                                                <a class="btn btn-dark" href="/viewInvoice/{{$inv->id}}">View</a>
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