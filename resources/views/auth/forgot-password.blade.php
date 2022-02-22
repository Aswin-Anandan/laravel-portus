<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="site keywords" />

    <!--Disable number detection in IE Edge-->
    <meta name="format-detection" content="telephone=no">

    <title>Forgot Password </title>	

    


    <link rel="shortcut icon" href="{{asset('home')}}/img/portus-logo.png" type="image/x-icon" />
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
    <style>
      .error{
    color: red;
}
</style>

</head>

<body>

<div class="auth-main-wrap">
<div class="auth-wrap login-wrap">
        <header class="auth-header">
            <div class="logo"><a href="/"><img class="logo" alt="Portus" id="forgot_password" src="{{asset('home')}}/img/portus-logo.png" width="123" height="48"></a></div>
            <div class="tag-line">Forgot Password</div>
            @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
   
                                
        </header> 
    <div class="auth-content-box">
        <form method="POST" action="{{ route('password.email') }}" class="auth-form" id="password"> 
            @csrf
            
            <div class="form-group">
              <x-label for="email" :value="__('Email Address')" />
              <input id="email" class="radius-0 form-control" type="email" name="email" :value="old('email')" placeholder="Email Address" required autofocus/>
              <span class="required-field"></span> 
            </div>
            <div class="form-group">
                <x-button class="btn radius-0 no-shadow btn-primary text-uppercase btn-lg btn-block auth-btn">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
            <div class="form-group mb-3">
                    <div class="auth-switching text-center">
                        <a href="/">Home</a>
                    </div>
        </form>     
           
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

$('#password').validate({
    rules: {
    email:"required",

},
            messages: {

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
</body>
</html>
