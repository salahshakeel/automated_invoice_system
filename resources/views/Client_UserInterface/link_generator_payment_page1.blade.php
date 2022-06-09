@extends('app')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="{{ route('create_link_generator_payment_page1') }}">
            @csrf
				<span class="contact100-form-title">
                @include('Classes.subheading')
				</span>

				<div class="mx-auto d-block">
				@include('Classes.logo')
				</div>

                <div class="w-100 p-3">  </div>

		
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Payment Type *</span>
					<div>
						<select class="js-select2"  name="payement_type">
							<option>Fresh</option>
							<option>Upsell</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" Type="submit">
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