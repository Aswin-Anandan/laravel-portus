@extends('layouts.admin')
@section('app-title', 'Add Courier Service')
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
                        <form class="form-horizontal form-material" method="post" action="{{ route('courier_service.store') }}"
                            enctype="multipart/form-data" id ="courier_service">
                            @csrf
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Name</label>
                                <span class="required-field"></span>
                                
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" id="name" name="name" placeholder="eg: DTDC"
                                        class="form-control p-0 border-0">
                                    
                                </div>
                            </div>
                            <style>
      label.error{
    color: red;
}
.p-2{

background:#adb2ba;
   font-weight:500 !important;
   
}
</style>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Url</label>
                                <div class="col-md-12 border-bottom p-0">
                                <span class="required-field"></span>
                                    <input type="text" name="url" id="url" class="form-control p-0 border-0"
                                        placeholder="eg: dtdc.com/track?q=">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-sm-12">Is Url Passing Supported?</label>
                                <span class="required-field"></span>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none p-0 border-0 form-control-line"
                                        id="is_get_supported" name="is_get_supported">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit">Save</button>&nbsp;&nbsp;&nbsp;
                                    <a href="{{route('courier_service.list')}}">
                                    <button type="button"  class="btn btn-danger" >Back</button><a>
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
