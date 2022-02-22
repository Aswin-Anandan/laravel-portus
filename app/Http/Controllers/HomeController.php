<?php

namespace App\Http\Controllers;

use App\Models\CourierServices;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        if (Auth::user()->user_role === 'admin') {
            $data['total_orders'] = Order::where('is_deleted', 0)->count();
            $data['total_couriers'] = CourierServices::where('is_deleted', 0)->count();
            return view('dashboard')->with('summary', $data);
        }
        if (Auth::user()->user_role === 'customer') {
            return redirect()->route('orders.track_order');
            
        }
        
       
    }




    public function track_order(){
      if(Auth::guest()){
        return redirect()->route('login');
            
      }

        return view('customer.search-order');
    }

    public function search_track_order(Request $request){
        $validation_array=[
            'tracking_id'=>'required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
           ];
        $this->validate($request,$validation_array);
    
        $result=  Order::where('orders.is_deleted',0)->where('orders.order_no',$request->tracking_id)->
        select('orders.*','courier_services.name as courier_service_name','courier_services.url','courier_services.is_get_supported')
        ->join('courier_services', 'orders.courier_id', '=', 'courier_services.id')->first();
       
        if($result!=null){
            return view('customer.view-order-details',compact('result'));
        }else{
           
            return redirect()->back()->with(array('message'=>'Invalid Order ID'));
        }
    }
}
