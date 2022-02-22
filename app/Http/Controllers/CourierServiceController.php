<?php

namespace App\Http\Controllers;

use App\Models\CourierServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourierServiceController extends Controller
{
    public function index()
    {
        $courier_list= CourierServices::where('is_deleted',0)->get();
        return view('courier-services/courier-service-list',compact('courier_list'));
    }
    public function new()
    {
        return view('courier-services/courier-service-add');
    }
    public function store(Request $request)
    {
       $validation_array=[
        'name'=>'required',
        'url'=>'required',
        'is_get_supported'=>'required'   
       ];

       $this->validate($request,$validation_array);
    
 
       $courier_service=new CourierServices;
       $added_by=Auth::user()->id;
      
       $courier_service->name=$request->name;
       $courier_service->url=$request->url;
       $courier_service->is_get_supported=$request->is_get_supported;

       $courier_service->save();
       return redirect()->route('courier_service.list')->with(array('message'=>'Added Successfully','toast_class'=>'success'));;
    
    }

    public function edit($id)
    {
        $cdata= CourierServices::where('id',$id)->first();
        return view('courier-services/courier-service-edit',compact('cdata'));
    }

    public function update(Request $request,$id)
    {
       
        CourierServices::where('id',$id)->update([
           'name'=>$request->name,
           'url'=>$request->url,
           'is_get_supported'=>$request->is_get_supported
           ]);


       return redirect()->route('courier_service.list')->with(array('message'=>'Updated Successfully','toast_class'=>'success'));;
    
    }

    public function delete(Request $request,$id)
    {
      
        CourierServices::where('id',$id)->update(['is_deleted'=>1]);
       return redirect()->route('courier_service.list')->with(array('message'=>'Deleted Successfully','toast_class'=>'error'));;
    
    }
}
