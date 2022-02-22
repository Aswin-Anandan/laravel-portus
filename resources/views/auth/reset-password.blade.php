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

    <title>Portus | Producers of high-quality Sea food & Aquaculture products </title>	

   
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

li{
    color:red;
}
</style>

</head>

<body>
<div class="auth-main-wrap">
<div class="auth-wrap login-wrap">
        <header class="auth-header">
            <div class="logo"><a href="index.html#homepages"><img class="logo" alt="Porto" src="{{asset('home')}}/img/portus-logo.png" width="123" height="48"></a></div>
        </header>
        <div class="auth-content-box">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}" class="auth-form" id="password_update"> 
            @csrf
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-group">
            <x-label for="email" :value="__('Email Address')" />
            <span class="required-field"></span>
              <input id="email" class="radius-0 form-control" type="email" name="email" :value="old('email')" placeholder="Email Address" required autofocus/>
            </div>
            <div class="form-group">
            <x-label for="password" :value="__('Enter Password')" />
            <span class="required-field"></span>
              <input id="password" class="radius-0 form-control" type="password" name="password" required placeholder="Password" required autofocus/>
            </div>
            <div class="form-group">
            <x-label for="password" :value="__('Re-type Password')" />
            <span class="required-field"></span>
              <input id="re_password" class="radius-0 form-control" type="password" name="password_confirmation" required placeholder="Confirm Password" required autofocus/>
            </div>
            <div class="form-group">
                <x-button class="btn radius-0 no-shadow btn-primary text-uppercase btn-lg btn-block auth-btn">
                    {{ __('Reset Password') }}
                </x-button>
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

        $('#password_update').validate({
            rules: {
                  email: "required",
                  password: "required",
                  re_password:"required",

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
