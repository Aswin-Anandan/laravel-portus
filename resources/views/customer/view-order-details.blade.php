@extends('layouts.public')
@section('content')
<style>
  @media(max-width:352px){
.svgb {
  height:160px !important;
     
    }
  }


</style>
<div role="main" class="main">

<section class="section section-height-3 border-0 m-0">
    <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
        <div class="row justify-content-end pt-1 mt-lg-5">
            <div class="col-7 col-md-5 position-relative">				               
                <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
                    <span class="svgb svgbt d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation text-uppercase" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">ORDER DETAILS</span>
                    <span class="svgb custom-svg-position-1 custom-svg-position-1-variation">
                        <svg class="svgb svg-fill-color-dark mt-1 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 859.45 88.44" xml:space="preserve" preserveAspectRatio="none">
                            <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79 "/>
                        </svg>
                    </span>
                </h1>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
          
                <div class="card-body">

                    <table class="table table-bordered">
                    
                        <tbody>
                          <tr>
                            <td>Order ID</td>
                            <td>{{$result->order_no}}</td>
                          </tr>
                          <tr>
                            <td>Title</td>
                            <td>{{$result->order_title}}</td>
                          </tr>
                          <tr>
                            <td>Description</td>
                            <td>{{$result->order_description}}</td>
                          </tr>
                          <tr>
                            <td>Delivery Address</td>
                            <td>{{$result->delivery_address}}</td>
                          </tr>
                          <tr>
                            <td>Shipment Date</td>
                            <td>{{date("d-m-Y", strtotime($result->shipment_date))}}</td>
                          </tr>
                          <tr>
                            <td>Courier Service</td>
                            <td>{{$result->courier_service_name}}</td>
                          </tr>
                          <tr>
                            <td>Tracking ID</td>
                            <td>{{$result->tracking_id}}</td>
                          </tr>
                          <tr>
                            <td colspan="2" class="text-center">
                                <a href="{{$result->url."".($result->is_get_supported?$result->tracking_id:"")}}" target="__blank">
                                    <button  class="btn btn-success">Track</button></a>

                                    <a href="{{route('orders.track_order')}}">
                                        <button  class="btn btn-secondary ml-3">Track Another Shipment</button></a>
                            </td>
                            
                          </tr>
                        </tbody>
                      </table>
                
              
      
            
        </div>
    </div>
</div>
<script>
        if(performance.navigation.type == 2){
   location.reload(true);
}
</script>
@endsection
