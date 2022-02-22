@extends('layouts.admin')
@section('app-title', 'Update Courier Service')
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">

            <!-- Column -->
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
.p-2{

background:#adb2ba;
   font-weight:500 !important;
   
</style>
                        <form class="form-horizontal form-material" method="post" id="courier_service" action="{{route('courier_service.update',$cdata->id)}}" >
                            @csrf
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Name</label>
                                <span class="required-field"></span>

                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" id="name" name="name" value="{{$cdata->name}}"
                                        class="form-control p-0 border-0">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Url</label>
                                <span class="required-field"></span>

                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" name="url" id="url" class="form-control p-0 border-0"
                                    value="{{$cdata->url}}" >
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-sm-12">Is Url Passing Supported?</label>
                                <span class="required-field"></span>

                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none p-0 border-0 form-control-line"
                                        id="is_get_supported" name="is_get_supported">
                                        <option value="1" {{$cdata->is_get_supported?"selected":""}}>Yes</option>
                                        <option value="0"  {{$cdata->is_get_supported==0?"selected":""}}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit">Save</button>&nbsp;&nbsp;&nbsp;
                                    <a href="{{route('courier_service.list')}}">
                                   <button type="button"  class="btn btn-danger">Back</button><a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
            <script>
    //Form Validation
    $(document).ready(function() {




    });




    $(function() {

        $('#courier_service').validate({
            rules: {
                  
                  name: "required",
                  url: "required",
                  is_get_supported:"required",

            },
            messages: {

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
@endsection
