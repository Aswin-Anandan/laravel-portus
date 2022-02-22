@extends('layouts.admin')
@section('app-title', 'Courier Services')
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">

                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="box-title">Courier Services</h3>
                            @if(session()->has('message'))
                                    <div class="alert alert-success" id="alert">
                                    {{ session()->get('message') }}
                                    </div>
                                    @endif
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary float-end"
                                onclick="window.location='{{ route('courier_service.new') }}'"><i
                                    class="fa fa-plus fa-w-20 btn-icon-wrapper"> </i> Add</button>
                                   

                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Url</th>
                                    <th class="border-top-0">Is Url Passing Supported?</th>
                                    <th class="border-top-0">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courier_list as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->url}}</td>
                                        <td>{{$item->is_get_supported?"Yes":"No"}}</td>
                                        <td>
                                            <button class="btn-icon btn-icon-only btn btn-primary btn-sm"
                                                onclick="window.location='{{route('courier_service.edit',$item->id)}}'"><i class="fa fa-pencil-alt btn-icon-wrapper">
                                                </i></button>
                                            <button class="btn-icon btn-icon-only btn btn-danger btn-sm"
                                                onclick="if(confirm('Are you sure?')){window.location='{{route('courier_service.delete',$item->id)}}'}"><i
                                                    class="fa fa-trash-alt text-white btn-icon-wrapper"> </i></button>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
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
