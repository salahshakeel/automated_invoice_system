@extends('Admin/admin_app')

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Sales Payment Merchant</h1>
                        <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ Route('admin_dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ Route('table_sales_payment_merchant') }}">Sales Payment Table</a></li>
                            <li class="breadcrumb-item active">Sales Payment Merchant</li>
                        </ol>
                        <div class="card mb-4">
                        @if(Session::has('sales_payment_merchant_created'))
                                        <div  class="alert alert-success" role ="alert">
                                        {{Session::get('sales_payment_merchant_created')}}
                                        </div>
                                        @endif
                            <div class="card-body">
                            <form method = "POST" action = "{{ Route('create_sales_payment_merchant') }}">
                            @csrf
                                        
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Sales Payment Merchant</label>
                                                        <input class="form-control py-4" name="sales_payment_merchant" id="inputFirstName" type="text" placeholder="Enter Sales Payment Merchant" />
                                                    </div>
                                                    @if ($errors->has('sales_payment_merchant'))
                                                    <span class="text-danger">{{ $errors->first('sales_payment_merchant') }}</span>
                                                    @endif
                                               
                                           
                                            <div class="form-row">
                                               
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                    <button class="btn btn-primary btn-block" type="submit">Create Mechant</button>
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