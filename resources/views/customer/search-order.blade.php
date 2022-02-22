@extends('layouts.public')
@section('content')

<head>
    {!! RecaptchaV3::initJs() !!}
</head>

<div role="main" class="main">

    <section class="section section-height-3 border-0 m-0">
        <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
            <div class="row justify-content-end pt-1 mt-lg-5">
                <div class="col-7 col-md-5 position-relative">
                    <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">

                        <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79 " />
                        </svg>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
        <style>
      label.error{
    color: red;
}
</style>
    </section>


    <section class="track-list-section py-5">
        <div class="row1">
            <div class="col-md-6">
                <form method="POST" action="{{ route('orders.search_track_order') }}" id="track_order">
                    @csrf
                    <div class="form-group text-center">

                        @if(session()->has('message'))
                        <span class="text-danger col-12 " role="alert">
                            <strong>{{ session()->get('message') }}</strong>
                        </span>

                        @endif
                    </div>
                    <div class="form-group text-center">
                        <label>Order Id</label>
                        <input id="tracking_id" type="text" class="radius-0  form-control" name="tracking_id" required autofocus>
                        @error('tracking_id')
                        <strong style="color:red;">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                        <div class="col-md-6">
                            {!! RecaptchaV3::field('register') !!}
                            @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group mb-3">
                        <button type="submit" class="btn radius-0 no-shadow btn-primary text-uppercase btn-lg btn-block auth-btn">Track Shipment</button>
                   
                    </div>
                </form>
            </div>
        </div>

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script>
        //Form Validation
    $(document).ready(function() {

});

$(function() {

$('#track_order').validate({
   rules: {
   tracking_id:"required",

},
           messages: {


           },
           submitHandler: function(form) {
               form.submit();
           }
       });
   });
</script>
    <script>
        if(performance.navigation.type == 2){
   location.reload(true);
}
</script>
    @endsection