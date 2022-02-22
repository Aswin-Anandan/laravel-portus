@extends('layouts.public')
@section('content')
<link rel="stylesheet" href="{{asset('home')}}/css/product.css">
<style>
	.p-page{
		color: #0176a5 !important;
	}
	</style>
			<div role="main" class="main">

				<section class="section sec1 section-height-3 border-0 m-0">
				    <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
				        <div class="row justify-content-end pt-1 mt-lg-5">
				            <div class="col-7 col-md-5 position-relative">				               
				                <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
				                    <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation text-uppercase" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">Products</span>
				                    <span class="custom-svg-position-1 custom-svg-position-1-variation">
				                        <svg class="svg-fill-color-dark mt-1 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 859.45 88.44" xml:space="preserve" preserveAspectRatio="none">
				                            <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79 "/>
				                        </svg>
				                    </span>
				                </h1>
				            </div>
				        </div>
				    </div>
				</section>


				<section class="product-section">
					<div class="container">
						<div class="row">
					
							<div class="col-sm-6 col-md-4 isotope-item pre-construction">
								<div class="portfolio-item appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
									<div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons mb-3-5">
										<div class="">
											<a href="{{url('/Crustaceans')}}"><img src="{{asset('home')}}/images/portus product images/SHRIMP IN HAND.jpg" class="img-fluid" alt="" style="width:350px; height:355px;"></a>												
										</div>
									</div>
									<h2 class="font-weight-bold text-5-5 line-height-3">
										<a href="{{url('/Crustaceans')}}"class="text-color-dark text-color-hover-primary text-decoration-none product-title" style="text-align:center;"><h1>Crustaceans</h1></a>
									</h2>
								</div>
							</div>
							<div class="col-sm-6 col-md-4 isotope-item pre-construction">
								<div class="portfolio-item appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
									<div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons mb-3-5">
										<div class="">
										<a href="{{url('/Cephalopodes')}}"><img src="{{asset('home')}}/images/portus product images/Octopus.jpg" class="img-fluid" alt="" style="width:350px; height:355px;"></a>												
										</div>
									</div>
									<h2 class="font-weight-bold text-5-5 line-height-3">
										<a href="{{url('/Cephalopodes')}}" class="text-color-dark text-color-hover-primary text-decoration-none  product-title" style="text-align:center;"><h1>Cephalopodes</h1></a>
									</h2>
								</div>
							</div>
							<div class="col-sm-6 col-md-4 isotope-item pre-construction">
								<div class="portfolio-item appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
									<div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons mb-3-5">
										<div class="">
										<a href="{{url('/Others')}}"><img src="{{asset('home')}}/images/portus product images/OCTO-SHELLSAND ETC.jpg" class="img-fluid" alt="" style="width:350px; height:355px;"></a>												
										</div>
									</div>
									<h2 class="font-weight-bold text-5-5 line-height-3">
										<a href="{{url('/Others')}}" class="text-color-dark text-color-hover-primary text-decoration-none  product-title"style="text-align:center;"><h1>Other Species</h1> </a>
									</h2>
								</div>
							</div>


							
							
                          </div>
							
							
							
						
						</div>
					</div>
				</section>

			
@endsection