@extends('Admin/admin_app')

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Users</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h7 class="small text-white " >{{ $users_count }}</h7>
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Invoices</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h7 class="small text-white " >{{ $invoices_count }}</h7>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Sales Payment Merchant</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h7 class="small text-white " >{{ $spm_count }}</h7>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Sales Person Email</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h7 class="small text-white " >{{ $spe_count }}</h7>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Today Invoices
                            </div>
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