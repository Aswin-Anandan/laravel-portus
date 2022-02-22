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

    <title>LOGIN </title>	

   
    <link rel="shortcut icon" href="{{asset('home')}}/img/portus-logo.png" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!--iOS Home screen properties-->
    <link rel="apple-touch-startup-image" href="images/launch-screen.png">
    <meta name="apple-mobile-web-app-title" content="">
    <meta name="apple-mobile-web-app-capable" content="no">
    <meta name="apple-mobile-web-app-status-bar-style" content="#18bcee">
    <link rel="stylesheet" href="{{asset('home')}}/css/import.css">
    <link rel="stylesheet" href="{{asset('home')}}/css/product.css">

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
            <div class="logo"><a href="/"><img class="logo" alt="Porto" src="{{asset('home')}}/img/portus-logo.png" width="123" height="48"></a></div>
            <div class="tag-line">Login Your Account</div>
        </header>
        <div class="auth-content-box">
            <form method="POST" action="{{ route('login')}}" class="auth-form" id="login">
            @csrf
            <div class="form-group">
                    <input type="text" class="radius-0 form-control is-invalid @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus placeholder="Email Address">
                   
                    @error('email')
                                    <span class=""  role="alert">
                                        <strong style="color:red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                   
                </div>
                <div class="form-group">
                    <input type="password" id="password" type="password" class="radius-0 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                                    <span class="fa fa-fw fa-eye field-icon toggle-password" role="alert">
                                        <strong style="color:red;" >{{ $message }}</strong>
                                    </span>
                                @enderror
                                 
                </div>
                <div class="form-group mb-4">
                    <div class="d-flex">
                        <div class="">
                            <label class="c-checkbox">
                           
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

<label class="form-check-label" for="remember">
    {{ __('Remember Me') }}
</label>
                                </label>
                        </div>
                        <div class="ml-auto">
                        @if (Route::has('password.request'))
                                    <a class="forgot-password float-right text-uppercase" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn radius-0 no-shadow btn-primary text-uppercase btn-lg btn-block auth-btn">{{ __('Login') }}</a>
                </div>
               
                <div class="form-group mb-3">
                    <div class="auth-switching text-center">
                        Don't have an account, No worries <a href="{{url('/register')}}">Sign Up</a> here.
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="auth-switching text-center">
                        <a id="t-h" href="/">Home</a>
                    </div>
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

        $('#login').validate({
            rules: {
                  login: "required",
                  password: "required",

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
