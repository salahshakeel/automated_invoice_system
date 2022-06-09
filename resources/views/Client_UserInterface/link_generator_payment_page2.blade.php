@extends('app')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="{{ route('create_link_generator_payment_page2') }}">
            @csrf
				<span class="contact100-form-title">
                @include('Classes.subheading')
				</span>

				<div class="mx-auto d-block">
				@include('Classes.logo')
				</div>

				<input type="hidden" value=" {{Session::get('payement_type')}}" name="payement_type"/>

                <div class="w-100 p-3">  </div>

                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Project Name">
					<span class="label-input100">PROJECT TITLE *</span>
					<input class="input100" type="text" name="project_title" placeholder="Enter Your Project Title">
				</div>

                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Proejct Amount">
					<span class="label-input100">PROJECT AMOUNT *</span>
					<input class="input100" type="number" name="amount" placeholder="Enter Your Project Amount">
				</div>

                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Project Description">
					<span class="label-input100">PROJECT DESCRIPTION *</span>
					<textarea class="input100" type="text" name="description" placeholder="Enter Your Project Description"></textarea>
				</div>


		
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Brands *</span>
					<div>
						<label>
							<input class="input80" type="radio" name="brand" value="\images/logo/logo.png" checked >
							<img src="\images/logo/logo.png" height="50" width="100"></img>
						</label>
						<label>
							<input class="input80" type="radio" name="brand" value="\images/logo/certified_web_maker.jpg">
							<img src="\images/logo/certified_web_maker.jpg" height="50" width="100"></img>
						</label>
						<label>
							<input class="input80" type="radio" name="brand" value="\images/logo/cubewbagency.png">
							<img src="\images/logo/cubewbagency.png" height="100" width="100"></img>
						</label>
						<label>
							<input class="input80" type="radio" name="brand" value="\images/logo/get_legit_logo.jpg" >
							<img src="\images/logo/get_legit_logo.jpg" height="100" width="100"></img>
						</label>
						<label>
							<input class="input80" type="radio" name="brand"  value="\images/logo/logo_certificate_maker.png">
							<img src="\images/logo/logo_certificate_maker.png" height="80" width="80"></img>
						</label>
						<label>
							<input class="input80" type="radio" name="brand" value="\images/logo/nft.png" >
							<img src="\images/logo/nft.png" height="50" width="50"></img>
						</label>

						</div>
				</div>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						<span>
							Next
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

    @endsection