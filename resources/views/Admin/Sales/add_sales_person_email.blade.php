@extends('Admin/admin_app')

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Sales Person Email</h1>
                        <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ Route('admin_dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ Route('table_sales_person_email') }}">Sales Person Table</a></li>
                            <li class="breadcrumb-item active">Sales Person Email</li>
                        </ol>
                        <div class="card mb-4">
                        @if(Session::has('sales_person_email_created'))
                                        <div  class="alert alert-success" role ="alert">
                                        {{Session::get('sales_person_email_created')}}
                                        </div>
                                        @endif
                            <div class="card-body">
                            <form method = "POST" action = "{{ Route('create_sales_person_email') }}">
                            @csrf
                                        
                                                   
                                               
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" name = "sales_person_email" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            </div>
                                            @if ($errors->has('sales_person_email'))
                                                    <span class="text-danger">{{ $errors->first('sales_person_email') }}</span>
                                                    @endif
                                            <div class="form-row">
                                               
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                    <button class="btn btn-primary btn-block" type="submit">Create Email</button>
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