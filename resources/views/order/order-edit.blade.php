@extends('layouts.admin')
@section('app-title', 'Update Order')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <style>
                         .required-field::after {
    content: "*";
    color: red;
}
</style>
                    <style>
      label.error{
    color: red;
}
.p-1{

    background:#adb2ba;
       font-weight:500 !important;
       
   }

</style>
                        <form class="form-horizontal form-material" id="form1" method="post"
                            action="{{ route('orders.update', $cdata->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Order Title</label>
                                <span class="required-field"></span>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" id="order_title" name="order_title"
                                        value="{{ $cdata->order_title }}" class="form-control p-0 border-0">
                                    @error('order_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Description</label>
                                <span class="required-field"></span>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea name="order_description" id="order_description" rows="4"
                                        class="form-control p-0 border-0">{{ $cdata->order_description }}</textarea>
                                    @error('order_description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-sm-12">Courier Service</label>
                                <span class="required-field"></span>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none p-0 border-0 form-control-line" id="courier_id"
                                        name="courier_id">
                                        <option hidden="selected" value="">Select</option>
                                        @foreach ($couriers as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                    @error('courier_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Courier Tracking ID</label>
                                <span class="required-field"></span>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" name="tracking_id" id="tracking_id" class="form-control p-0 border-0"
                                        value="{{ $cdata->tracking_id }}">
                                    @error('tracking_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Customer Name</label>
                                <span class="required-field"></span>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" id="customer_name" name="customer_name"
                                        value="{{ $cdata->customer_name }}" class="form-control p-0 border-0">
                                    @error('customer_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Email</label>
                                <span class="required-field"></span>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" id="customer_email" name="customer_email"
                                        placeholder="abc@example.com" value="{{ $cdata->customer_email }}"
                                        class="form-control p-0 border-0">
                                    @error('customer_email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Shipment Date</label>
                                <span class="required-field"></span>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="date" id="shipment_date" name="shipment_date"
                                        class="form-control p-0 border-0" value="{{ $cdata->shipment_date }}">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Delivery Address</label>
                                <span class="required-field"></span>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea name="delivery_address" id="delivery_address" rows="4"
                                        class="form-control p-0 border-0">{{ $cdata->delivery_address }}</textarea>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12" style="display:flex;">
                                    <button class="btn btn-success" type="submit">Update</button>&nbsp;&nbsp;&nbsp;
                                    <a href="{{route('orders.list')}}">
                                    <button type="button"  class="btn btn-danger">Back</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
jQuery(document).ready(function() {
    jQuery("#form1").validate({
       rules: {
          customer_name: 'required',
          tracking_id: 'required',
          order_title: 'required',
          order_description: {
              required:true,
              maxlength:255,
          },
          courier_id: 'required',
          customer_email: {
             required: true,
             email: true,
             maxlength: 255,
             },
             shipment_date: 'required',
             delivery_address: 'required',
       }
    });
 });
 </script>s
    <script>
        $("#courier_id").val({{ $cdata->courier_id }});
    </script>
    
@endsection
