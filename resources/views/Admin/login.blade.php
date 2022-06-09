<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="\images/logo/logo.png"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Automated Invoice System</title>
        <link href="Admin/dist/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style=" background-image: url('\\images/logo/bg_image.jpeg'); 
  background-size: cover;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                    @if(Session::has('error_signin'))
<div class="alert alert-danger" role ="alert">
{{Session::get('error_signin')}}
</div>

@endif
                                        <form method = "post" action = "{{ route('signin.custom') }}">
                                        @csrf
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" name = "email" type="email" placeholder="Enter email address" />
                                            </div>
                                            @if ($errors->has('email'))
                                <div class="input-group">
                               
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                               
    </div>
    @endif
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" name = "password" type="password" placeholder="Enter password" />
                                            </div>
                                            @if ($errors->has('password'))
                                <div class="input-group">
                               
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                               
    </div>
    @endif
                                            
                                            <div class="form-group  justify-content-between mt-4 mb-0">
                                         
                                                <button type="submit" class="btn btn-dark" >Login</button>
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            @include('Admin/Classes/footer')
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="Admin/dist/js/scripts.js"></script>

        <script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 5000);
 
});
</script>  

    </body>
</html>
