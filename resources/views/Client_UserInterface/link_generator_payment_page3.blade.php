@extends('app')

@section('content')
<div class="container-contact100" >
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="{{ Route('create_link_generator_payment_page3') }}">
            @csrf
				<span class="contact100-form-title">
                @include('Classes.subheading')
				</span>

				<div class="mx-auto d-block">
				@include('Classes.logo')
				</div>

                <div class="w-100 p-3">  </div>

				<input type="hidden" value=" {{Session::get('payement_type')}}" name="payement_type"/>
				<input type="hidden" value=" {{Session::get('project_title')}}" name="project_title"/>
				<input type="hidden" value=" {{Session::get('amount')}}" name = "amount"/>
				<input type="hidden" value=" {{Session::get('description')}}" name = "description"/>
				<input type="hidden" value=" {{Session::get('brand')}}" name = "brand"/>
	
				
                <div class="wrap-input100 input100-select bg1 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="customer_email" placeholder="Enter Your Email ">
				</div>

                <div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Sales person email *</span>
					<div>
						<select class="js-select2"  name="sales_person_email_id">
						@foreach($sales_person_email as $sp)
							<option value="{{ $sp->id }}">{{ $sp->sales_person_email }}</option>
							@endforeach
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

                <div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Sales Payment Merchant *</span>
                    <br/>
                    <span class="label-input100" style="color:red">(Make Sure To Choose Appropriate Merchant)</span>
					<div>
						<select class="js-select2"  name="sales_payment_merchant_id">
						@foreach($sales_payment_merchant as $sp)
							<option value="{{ $sp->id }}">{{ $sp->sales_payment_merchant }}</option>
							@endforeach
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

		
			

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

    @endsection