
@extends('layout.app',['title'=>'services '])
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection

@section('content')

@component('components.panel',['subTitle'=>'  services '])
@if($services->isEmpty())

@component('components.empty',['section'=>' services ']) @endcomponent

@else 

<table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>name  </th>
            <th>description </th>
            <th> image</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>  
@foreach($services as $service)
        <tr>
<th> <a href="/admin/service/info/{{$service->id}}">{{$service->name}}</a></th>
<th><a href="/admin/service/info/{{$service->id}}"> {{str_limit($service->description,50,'...')}}</a></th>
<th><img src="{{asset($service->image)}}" width=50px > </th>
<th><a href="/admin/service/edit/{{$service->id}}" class="btn btn-block btn-info btn-flat"> edit </a></th>
        </tr>

        @endforeach  
        </tbody>

        </table>

@endif

@slot('footer')
<div class="col-lg-4">

<a  href="/admin/service/add" class="btn btn-block btn-success btn-lg"> <i class="fa fa-plus" aria-hidden="true"></i> add services  </a>
</div>
@endslot

@endcomponent
 @endsection     

 @section('javascript')
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<!-- page script -->
<script>
  $(function () {

    $('#example2').DataTable({
      "info" : true,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "autoWidth": false
    });
  });
</script>

 @endsection