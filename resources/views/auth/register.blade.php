
<!doctype html>
<html lang="en">
<style>
	.required-field::after {
    content: "*";
    color: red;
}
</style>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="site keywords" />

    <!--Disable number detection in IE Edge-->
    <meta name="format-detection" content="telephone=no">

    <title>Register</title>	

   
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!--iOS Home screen properties-->
    <link rel="apple-touch-startup-image" href="images/launch-screen.png">
    <meta name="apple-mobile-web-app-title" content="">
    <meta name="apple-mobile-web-app-capable" content="no">
    <meta name="apple-mobile-web-app-status-bar-style" content="#18bcee">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

    <!-- App Styles -->

	<link rel="stylesheet" href="{{asset('home')}}/css/layout.css">
    <link rel="stylesheet" href="http://127.0.0.1:8001/home/css/theme-elements.css">
    <style>
      label.error{
    color: red;
}
</style>

</head>

<body>
<div class="auth-main-wrap">
    <div class="auth-wrap login-wrap">
        <header class="auth-header">
            <div class="logo"><a href="/"><img class="logo" alt="Porto" src="{{asset('home')}}/img/portus-logo.png" width="123" height="48"></a></div>
<div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
    <form method="POST" action="{{url('/register') }}" id="register_form">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            <span class="required-field"></span>   

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            <span class="required-field"></span>   

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail">

                @error('email')
                    
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            <span class="required-field"></span>   

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                @error('password')
                    
                <span class="" role="alert">
                                        <strong style="color:red;" >{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            <span class="required-field"></span>   

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            </div>
            </div>
         <br>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
</br>
        <div class="form-group mb-3">
                    <div class="auth-switching text-center">
                        <a href="/login">Back</a>
                    </div>
                </div>
                <div class="position-relative pb-5 d-sm-none d-xl-block">
    <div class="position-absolute transform3dy-n50 left-0">
        <div class="appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1500" data-appear-animation-duration="1500ms">
            <div class="custom-square-1 bg-primary mt-0 mb-5"></div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

 <script>
                    
//Form Validation
    $(document).ready(function() {

 });

$(function() {

$('#register_form').validate({
    rules: {
          password: {
                required: true,
                minlength:8,
                maxlength:15
              },
          name: "required",
          email: {
              required: true,
              minlength:3,
              maxlength:30
          },
          confirm_password:"required",

    },
    messages: {

    },
    submitHandler: function(form) {
        form.submit();
    }
});
});
    </script>
    </form>
</div>
</div>
</div>
</div>
</div>    
</div>
</div>