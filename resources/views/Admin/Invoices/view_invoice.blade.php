@extends('Admin/admin_app')

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">View Invoice</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ Route('admin_dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ Route('table_invoice') }}">Invoice Table</a></li>
                            <li class="breadcrumb-item active">View Invoice</li>
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
                                                <th>{{ $invoice->id }}</th>
                                            </tr>
                                            <tr>
                                            <th>PAYMENT TYPE</th>
                                            <th>{{ $invoice->payement_type }}</th>
                                            </tr>
                                            <tr>
                                            <th>PROJECT TITLE</th>
                                            <th>{{ $invoice->project_title }}</th>
                                            </tr>
                                            <tr>
                                            <th>AMOUNT</th>
                                            <th>{{ $invoice->amount }}</th>
                                            </tr>
                                            <tr>
                                            <th>DESCRIPTION</th>
                                            <th>{{ $invoice->description }}</th>
                                            </tr>
                                            <tr>
                                            <th>BRAND</th>
                                            <th><img src="{{ $invoice->brand }}" alt="{{ $invoice->brand }}" class="img-thumbnail"></th>
                                            </tr>
                                            <tr>
                                            <th>CUSTOMER EMAIL</th>
                                            <th>{{ $invoice->customer_email }}</th>
                                            </tr>
                                            <tr>
                                            <th>SALES PERSON EMAIL</th>
                                            <th>{{ $invoice->sales_person_email  }}</th>
                                            </tr>
                                            <tr>
                                            <th>SALES PAYMENT MERCHANT</th>
                                            <th>{{ $invoice->sales_payment_merchant  }}</th>
                                            </tr>
                                            <tr>
                                            <th>CREATED AT</th>
                                            <th>{{ $invoice->created_at }}</th>
                                            </tr>
                                               
                                           
                                        </thead>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection