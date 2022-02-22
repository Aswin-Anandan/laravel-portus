@extends('layouts.public')
@section('content')

<div role="main" class="main">

    <section class="section section-height-3 border-0 m-0 top-s">
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
    </section>
    <div class="m-div" style="width:80%; position:relative; left:100px">
    <div style="width:100%; text-align:right; margin-bottom:20px;">
    <a href="{{route('orders.track_order')}}">
                                        <button  class="btn btn-secondary ml-3" style="background:#0984bd; color:white">Track Another Shipment</button></a></div>

                                     <div class="table-block">
                                         <table class="table">
                                             <thead>
                                               <tr>                                           
                                                 <th scope="col">Item Name</th>
                                                 <th scope="col">Description</th>                                           
                                                 <th scope="col">Shipment Date</th>                                          
                                                 <th scope="col">Track Id</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                  @foreach($orders as $data)
                                    <tr>
                                        <td>{{$data->order_title}}</td>
                                        <td class="tdd">{{$data->order_description}}</td>
                                        <td>{{$data->shipment_date}}</td>
                                        <td>{{$data->tracking_id}}
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                                           </table>    
                                     </div>
                                     </div>
                                     <script>
        if(performance.navigation.type == 2){
   location.reload(true);
}
</script>
@endsection

</div>                                   
