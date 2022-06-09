@extends('Admin/admin_app')

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Sales Payment Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ Route('admin_dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Sales Payment Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body ">
                                <a  class="btn btn-dark" href="{{ Route('add_sales_payment_merchant') }}">Create New Merchant</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                           
                            <div class="card-body">
                            @if(Session::has('sales_payment_merchant_deleted'))
                                        <div  class="alert alert-success" role ="alert">
                                        {{Session::get('sales_payment_merchant_deleted')}}
                                        </div>
                                        @endif
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Merchant</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Merchant</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($spm as $spms)
                                            <tr>
                                                <td>{{ $spms->sales_payment_merchant }}</td>
                                                <td>
                                                   
                                                    <a class="btn btn-danger" href="/deleteSalesPaymentMerchant/{{$spms->id}}">Delete</a>
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