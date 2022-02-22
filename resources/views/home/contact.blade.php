@extends('layouts.public')
@section('content')
<link rel="stylesheet" href="{{asset('home')}}/css/contact.css">
<style>

</style>
<!-- <section class="section section-height-3 border-0 m-0">
    <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
        <div class="row justify-content-end pt-1 mt-lg-5">
            <div class="col-7 col-md-5 position-relative">
                <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
                    <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation text-uppercase" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">Team and Contacts</span>
                    <span class="custom-svg-position-1 custom-svg-position-1-variation">
                        <svg class="svg-fill-color-dark mt-1 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 859.45 88.44" xml:space="preserve" preserveAspectRatio="none">
                            <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79 " />
                        </svg>
                    </span>
                </h1>
            </div>
        </div>
    </div>
</section> -->


<!-- <section>
    <div class="container team" style="text-align:center" >
<div class="sort-destination-loader sort-destination-loader-loaded" data-remove-min-height="" style="min-height: 0px;">
								<div class="row sort-destination g-4 px-0" data-sort-id="portfolio" data-filter="*" style="position: relative; height: 792.906px;">
									<div class="col-sm-6 col-md-4 isotope-item pre-construction" style="position: absolute; left: 0px; top: 0px;">
										<div class="portfolio-item appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
											<div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons mb-3-5">
												<div class="thumb-info-wrapper">
													<img src="home/images/testimonial.png" class="img-fluid" alt="Pre Construction Image Sample">
													<div class="thumb-info-action">
													
															<div class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></div>
													
													</div>
												</div>
											</div>
											<span class="d-block text-color-grey positive-ls-3 font-weight-medium text-2">NEW YORK</span>
											<h2 class="font-weight-bold text-5-5 line-height-3">
												<a  class="text-color-dark text-color-hover-primary text-decoration-none">Porto Building</a>
											</h2>
										</div>
									</div>
									<div class="col-sm-6 col-md-4 isotope-item general-construction" style="position: absolute; left: 380px; top: 0px;">
										<div class="portfolio-item appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400" style="animation-delay: 1400ms;">
											<div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons mb-3-5">
												<div class="thumb-info-wrapper">
													<img src="home/images/testimonial.png" class="img-fluid" alt="Pre Construction Image Sample">
													<div class="thumb-info-action">
														
															<div class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></div>
													
													</div>
												</div>
											</div>
											<span class="d-block text-color-grey positive-ls-3 font-weight-medium text-2">NEW YORK</span>
											<h2 class="font-weight-bold text-5-5 line-height-3">
												<a  class="text-color-dark text-color-hover-primary text-decoration-none">Okler Towers</a>
											</h2>
										</div>
									</div>
									<div class="col-sm-6 col-md-4 isotope-item plumbling" style="position: absolute; left: 760px; top: 0px;">
										<div class="portfolio-item appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1600" style="animation-delay: 1600ms;">
											<div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons mb-3-5">
												<div class="thumb-info-wrapper">
													<img src="home/images/testimonial.png" class="img-fluid" alt="Pre Construction Image Sample">
													<div class="thumb-info-action">
														
															<div class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></div>
														
													</div>
												</div>
											</div>
											<span class="d-block text-color-grey positive-ls-3 font-weight-medium text-2">NEW YORK</span>
											<h2 class="font-weight-bold text-5-5 line-height-3">
												<a  class="text-color-dark text-color-hover-primary text-decoration-none">Jet Hotels</a>
											</h2>
										</div>
									</div>
									<div class="col-sm-6 col-md-4 isotope-item painting" style="position: absolute; left: 0px; top: 396.453px;">
										<div class="portfolio-item appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="300" style="animation-delay: 300ms;">
											<div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons mb-3-5">
												<div class="thumb-info-wrapper">
													<img src="home/images/testimonial.png" class="img-fluid" alt="Pre Construction Image Sample">
													<div class="thumb-info-action">
														
															<div class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></div>
														
													</div>
												</div>
											</div>
											<span class="d-block text-color-grey positive-ls-3 font-weight-medium text-2">NEW YORK</span>
											<h2 class="font-weight-bold text-5-5 line-height-3">
												<a class="text-color-dark text-color-hover-primary text-decoration-none">Okler Mansion</a>
											</h2>
										</div>
									</div>
									<div class="col-sm-6 col-md-4 isotope-item pre-construction" style="position: absolute; left: 380px; top: 396.453px;">
										<div class="portfolio-item appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="500" style="animation-delay: 500ms;">
											<div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons mb-3-5">
												<div class="thumb-info-wrapper">
													<img src="home/images/testimonial.png" class="img-fluid" alt="Pre Construction Image Sample">
													<div class="thumb-info-action">
												
															<div class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></div>
														
													</div>
												</div>
											</div>
											<span class="d-block text-color-grey positive-ls-3 font-weight-medium text-2">NEW YORK</span>
											<h2 class="font-weight-bold text-5-5 line-height-3">
												<a  class="text-color-dark text-color-hover-primary text-decoration-none">Top Building</a>
											</h2>
										</div>
									</div>
									<div class="col-sm-6 col-md-4 isotope-item general-construction" style="position: absolute; left: 760px; top: 396.453px;">
										<div class="portfolio-item appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="700" style="animation-delay: 700ms;">
											<div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons mb-3-5">
												<div class="thumb-info-wrapper">
													<img src="home/images/testimonial.png" class="img-fluid" alt="Pre Construction Image Sample">
													<div class="thumb-info-action">
														
															<div class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></div>
														
													</div>
												</div>
											</div>
											<span class="d-block text-color-grey positive-ls-3 font-weight-medium text-2">NEW YORK</span>
											<h2 class="font-weight-bold text-5-5 line-height-3">
												<a  class="text-color-dark text-color-hover-primary text-decoration-none">One Lofts</a>
											</h2>
										</div>
									</div>
								</div>
							<div class="bounce-loader"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>
</div>
</section> -->




<br><br><br><br><br>
<section class="contact-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3059.0256875323657!2d-75.15131128436079!3d39.940815079423224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c89ec96e8667%3A0xac21bf70cc7e30d3!2s339%20Bainbridge%20St%2C%20Philadelphia%2C%20PA%2019147%2C%20USA!5e0!3m2!1sen!2sin!4v1638177081262!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-12 col-sm-6">
                <div class="contac-block">
                    <div class="title">
                        <h4 class="appear-animation main-title-common animated fadeInUpShorterPlus appear-animation-visible">Send Message</h4>
                        @if(session()->has('message'))
                        <div class="alert alert-success" id="alert">
                            {{ session()->get('message') }}
                        </div>
                        @endif

                        <form method="POST" action="{{route('contact.submit')}}" id="contact_us">
                            @csrf
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <input type="text" name="name" class="radius-0 form-control" placeholder="Name" ><br>

                                <span class="text-danger">{{ $errors->first('name') }}</span>

                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="radius-0 form-control " placeholder="Address" >
                            </div>
                            <div class="form-group">
                                <input id="phone_no" type="text" name="phone_no" class="radius-0 form-control {{ $errors->has('phone_no') ? 'error' : '' }}" value="{{ old('phone_no') }}" autocomplete="phone_no" placeholder="Phone Number." >
                                @error('phone_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="form-control-icon">
                                    <i class="bi bi-phone"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="message" class="radius-0 form-control {{ $errors->has('message') ? 'error' : '' }}" placeholder="Message" >{{ old('phone_no') }}</textarea><br>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn radius-0 no-shadow btn-primary text-uppercase btn-lg btn-block auth-btn" type="submit" id="submit_btn">Submit</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
</section>



<div class="position-relative pb-5 d-sm-none d-xl-block">
    <div class="position-absolute transform3dy-n50 left-0">
        <div class="appear-animation square" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1500" data-appear-animation-duration="1500ms">
            <div class="custom-square-1 bg-primary mt-0 mb-5"></div>
        </div>
    </div>
</div>

</div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script>
    //Form Validation
    $(document).ready(function() {




    });




    $(function() {

        $('#contact_us').validate({
            rules: {
                  phone_no: {
                        required: true,
                        digits:true,
                        minlength:10,
                        maxlength:15
                      },
                  name: "required",
                  address: "required",
                  message:"required",

            },
            messages: {

            },
            submitHandler: function(form) {
                form.submit();
            }
            
        });
        function resetLoader(){
	$("#sbtn").text("Submit");
		$("#sbtn").attr("disabled",false);
		$("#spin-contact-submit").addClass('d-none');
}
    });
</script>
<script>
            	// this is the id of the form
function sumibtForm(){
	$("#sbtn").html(spinLoader+"Loading");
		$("#sbtn").attr("disabled",true);
		$("#spin-feedback-submit").removeClass('d-none');

var form = $(this);
var url = "{{route('contact.submit')}}";
var fdata=$("#contact_form").serialize();

$.ajax({
	   type: "POST",
	   url: url,
	   data: fdata, // serializes the form's elements.
	   success: function(data)
	   {
		 $("#contact-msg").html('<div class="alert alert-success" id="success-alert">'+data+'</div>');
		}
			});
		} 
	      
		 setTimeout(function () {
  
        // Closing the alert
        $('#alert').alert('close');
        }, 5000);
	

                </script>
				<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
</body>

</html>
@endsection