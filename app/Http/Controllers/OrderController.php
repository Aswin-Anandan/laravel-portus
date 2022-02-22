<?php

namespace App\Http\Controllers;

use App\Models\CourierServices;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $search_data = $request->search_order;
        if($search_data)
        {
            $order_list= Order::where('orders.is_deleted',0)->
        select('orders.*','courier_services.name as courier_service_name')
        ->join('courier_services', 'orders.courier_id', '=', 'courier_services.id')->where('orders.order_no','LIKE','%'.$search_data.'%')->orderBy('orders.id','DESC')->paginate(10);

        }
        else
        {
        $order_list= Order::where('orders.is_deleted',0)->
        select('orders.*','courier_services.name as courier_service_name')
        ->join('courier_services', 'orders.courier_id', '=', 'courier_services.id')->orderBy('orders.id','DESC')->paginate(10);

        }
        
        return view('order/order-list',compact('order_list','search_data'));
    }
    public function new()
    {
        $couriers=CourierServices::where('is_deleted',0)->get();
        return view('order/order-add',compact('couriers'));
    }
    public function store(Request $request)
    {
       $validation_array=[
        'order_title'=>'required',
        'order_description'=>'required',
        'customer_name'=>'required',   
        'customer_email'=>'required|email',   
        'tracking_id'=>'required',   
        'courier_id'=>'required'
       ];
       $this->validate($request,$validation_array);
    
       
 
       $order=new Order;
       $added_by=Auth::user()->id;
      
       $order->order_title=$request->order_title;
       $order->order_description=$request->order_description;
       $order->customer_name=$request->customer_name;
       $order->customer_email=$request->customer_email;
       $order->delivery_address=$request->delivery_address;
       $order->tracking_id=$request->tracking_id;
       $order->courier_id=$request->courier_id;
       $order->shipment_date=$request->shipment_date;
       $order->order_no=$this->generateOrderNO();

       $order->save();
      
       $last_insert=$order->id;
      
       $subject1=" Shipped";
       $to_name =  $order->customer_name;
       $to_email = $order->customer_email;
       $data =   Order::where('orders.is_deleted',0)->where('orders.id',$last_insert)->
       select('orders.*','courier_services.name as courier_service_name','courier_services.url','courier_services.is_get_supported')
       ->join('courier_services', 'orders.courier_id', '=', 'courier_services.id')->first();
       $data=json_decode(json_encode($data),true);

       Mail::send('emails.orderconfirmation', $data, function($message) use ($to_name, $to_email) {
       $message->to($to_email, $to_name)->subject(''.env('APP_NAME').' - Order Shipped');
       $message->from(env('MAIL_FROM_ADDRESS'),  Auth::user()->name);
       });


       return redirect()->route('orders.list')->with(array('message'=>'Added Successfully','toast_class'=>'success'));;
    
    }
    
     function generateOrderNO( ) {
       $no= random_int(100000, 999999);
        return $no;
    }

    public function edit($id)
    {
        $couriers=CourierServices::where('is_deleted',0)->get();
        $cdata= Order::where('id',$id)->first();
        return view('order/order-edit',compact('cdata','couriers'));
    }

    public function update(Request $request,$id)
    {
       
        $validation_array=[
            'order_title'=>'required',
            'order_description'=>'required',
            'customer_name'=>'required',   
            'customer_email'=>'required|email',   
            'tracking_id'=>'required',   
            'courier_id'=>'required'
           ];
           $this->validate($request,$validation_array);
    
        Order::where('id',$id)->update([
           'order_title'=>$request->order_title,
           'order_description'=>$request->order_description,
           'customer_name'=>$request->customer_name,
           'customer_email'=>$request->customer_email,
           'delivery_address'=>$request->delivery_address,
           'tracking_id'=>$request->tracking_id,
           'courier_id'=>$request->courier_id,
           'shipment_date'=>$request->shipment_date,
            ]);


       return redirect()->route('orders.list')->with(array('message'=>'Updated Successfully','toast_class'=>'success'));;
    
    }

    public function delete(Request $request,$id)
    {
      
        Order::where('id',$id)->update(['is_deleted'=>1]);
       
        $request->session()->flash('message', 'Deleted Successfully');
        return redirect()->route('orders.list');;
    
    }

}
