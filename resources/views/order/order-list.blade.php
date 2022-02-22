@extends('layouts.admin')
@section('app-title', 'Orders')
@section('content')

<style>
   
    .table{ 
   width: 100%; 
   word-wrap:break-word;
   table-layout: fixed;
}
td{
  
    overflow: hidden;
}
#mh{
    position:relative;
    left:50px;
}
#mh1{
    position:relative;
    left:50px;
}
#mh2{
    position:relative;
    left:90px;
}
#mh3{
    position:relative;
    left:160px;
}
#mh4{
    position:relative;
    left:200px;
}

    @media (max-width:1000px){
        #mh1{
    position:relative;
    left:50px;
}
#mh2{
    position:relative;
    left:90px;
}
#mh3{
    position:relative;
    left:160px;
}
#mh4{
    position:relative;
    left:200px;
}
       
        
    }




    </style>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">

                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="box-title">Orders</h3>
                            @if(session('message'))
                                    <div class="alert alert-success" id="alert">
                                    {{ session('message') }}
                                    </div>
                                    @endif
                                    <form method="GET" action="{{route('orders.list')}}">
                                    @csrf
                                    <div style="display:flex">
                                    <input type="text" name="search_order" value="{{$search_data}}" class="form-control" placeholder="Enter Order Id">
                                    <button type="submit" class="btn btn-success" style="width:180px; padding:0px">Search Order</button>
                                    </div>
                                    </form>


                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary float-end"
                                onclick="window.location='{{ route('orders.new') }}'"><i
                                    class="fa fa-plus fa-w-20 btn-icon-wrapper"> </i> Add</button>

                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Actions</th>

                                    <th class="border-top-0">Order ID</th>
                                    <th class="border-top-0">Title</th>
                                    <th class="border-top-0">Description</th>
                                    <th class="border-top-0">&nbsp;&nbsp;&nbsp;&nbsp;Customer Name</th>
                                    <th class="border-top-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email</th>
                                    <th class="border-top-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shipment Date</th>
                                    <th class="border-top-0"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Courier Service</th>
                                    <th class="border-top-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tracking ID</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order_list as $item)
                                    <tr>
                                        <td>
                                            <button class="btn-icon btn-icon-only btn btn-primary btn-sm"
                                                onclick="window.location='{{route('orders.edit',$item->id)}}'"><i class="fa fa-pencil-alt btn-icon-wrapper">
                                                </i></button>
                                            <button class="btn-icon btn-icon-only btn btn-danger btn-sm"
                                                onclick="if(confirm('Are you sure?')){window.location='{{route('orders.delete',$item->id)}}'}"><i
                                                    class="fa fa-trash-alt text-white btn-icon-wrapper"> </i></button>
                                                
                                        </td>
                                        <td>{{$item->order_no}}</td>
                                        <td>{{$item->order_title}}</td>
                                        <td>{{$item->order_description}}</td>
                                        <td id="mh">{{$item->customer_name}}</td>
                                        <td id="mh1">{{$item->customer_email}}</td>
                                        <td id="mh2">{{date("d-m-Y", strtotime($item->shipment_date))}}</td>
                                        <td id="mh3">{{$item->courier_service_name}}</td>
                                        <td id="mh4">{{$item->tracking_id}}</td>
                                       
                                    </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                        {{ $order_list->links("pagination::bootstrap-4") }}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
                  
                  setTimeout(function () {
            
                      // Closing the alert
                      $('#alert').alert('close');
                  }, 3000);
          
                </script>

<script>
        if(performance.navigation.type == 2){
   location.reload(true);
}
</script>

@endsection
