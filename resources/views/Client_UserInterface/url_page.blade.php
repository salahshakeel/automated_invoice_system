@extends('app')

@section('content')
<div class="container-contact100" >
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
           
				<span class="contact100-form-title">
                @include('Classes.subheading')
				</span>

				<div class="mx-auto d-block">
				@include('Classes.logo')
				</div>

                <div class="w-100 p-3">  </div>

                <div class="w-100 p-3"> 
                <span class="label-input200">An email has been sent to customer with the payment link.

The payment link has been generated.
Click Here to copy the URL to your clipboard.</span>
            </div>

           
				
                <div class="wrap-input100 input100-select bg1 validate-input bg1" >
					<span class="label-input100">Copy Url *</span>
					<input class="input100" type="text" id="myInput" disabled value="http://127.0.0.1:8000/payment/{{  Crypt::encrypt(Session::get('id')) }}">
				</div>

               	
				<div class="container-contact100-form-btn">
					<button type="button" class="contact100-form-btn" onclick="myFunction()">
						<span>
							Copy Link
							<i class="fa fa-clipboard m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>

                <div class="w-100 p-3">  </div>

                
                <div class="container" style="display:none;" id="myAlert">
       
        <div class="alert alert-success alert-dismissable" id="myAlert2">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Link Copied
        </div>

    </div>
			</form>
		</div>
	</div>
<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  if($("#myAlert").find("div#myAlert2").length==0){
    $("#myAlert").append("<div class='alert alert-success alert-dismissable' id='myAlert2'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> Success! message sent successfully.</div>");
  }
  $("#myAlert").css("display", "");
 
}

</script>

    @endsection