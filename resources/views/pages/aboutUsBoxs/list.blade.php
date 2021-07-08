
@extends('layout.app',['title'=>'about Us  '])
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection

@section('content')

@component('components.panel',['subTitle'=>'  about Us  '])
@if($aboutUsBoxs->isEmpty())

@component('components.empty',['section'=>' about Us  ']) @endcomponent

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
@foreach($aboutUsBoxs as $aboutUsBox)
        <tr>
<th> <a href="/admin/aboutUsBox/info/{{$aboutUsBox->id}}">{{$aboutUsBox->name}}</a></th>
<th><a href="/admin/aboutUsBox/info/{{$aboutUsBox->id}}"> {{$aboutUsBox->description}}</a></th>
<th><img src="{{asset($aboutUsBox->image)}}" width=50px > </th>
<th><a href="/admin/aboutUsBox/edit/{{$aboutUsBox->id}}" class="btn btn-block btn-info btn-flat"> edit </a></th>
        </tr>

        @endforeach  
        </tbody>

        </table>

@endif


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