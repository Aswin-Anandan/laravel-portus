<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
.header {
  padding: 20px;
  text-align: center;
  background: #bdbdbd;
  color: black;
  font-size: 30px;
}
* {
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body style="padding:20px;">
    <div class="header" style="text-align: center;">
    <img class="logo" alt="Porto" width="123" height="48"
                                        src="{{asset('home')}}/img/portus-logo.png">
                     
        
      </div>
<h4>Hi, {{$customer_name}}</h4>

<p>Your order is shipped.</p>

<table>
    <tr>
        <td>Order ID</td>
        <td>{{$order_no}}</td>
    </tr>
    <tr>
        <td>Order Title</td>
        <td>{{$order_title}}</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>{{$order_description}}</td>
    </tr>
    <tr>
        <td>Courier</td>
        <td>{{$courier_service_name}}</td>
    </tr>
    <tr>
        <td>Tracking Id</td>
        <td>{{$tracking_id}}</td>
    </tr>
    <tr>
        <td>Shipment Date</td>
        <td>{{$shipment_date}}</td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;">
            <a href="{{$url."".($is_get_supported?$tracking_id:"")}}" target="__blank">
            <button  style=" background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;">Track</button>
            </a>
            <br/>
            <br/>
            Tracking link: <a  href="{{$url.($is_get_supported?$tracking_id:"")}}">{{$url.($is_get_supported?$tracking_id:"")}}</a>

            <br/>
            <br/>
            <br/>
            <hr/>
            <br/>
            {{date('Y')}} © {{env('COMPANY_NAME')}}
        </td>
        
    </a>
    </tr>
</table>

</body>
</html>
