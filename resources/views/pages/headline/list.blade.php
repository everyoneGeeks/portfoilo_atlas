
@extends('layout.app',['title'=>'settings '])
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection

@section('content')

@component('components.panel',['subTitle'=>'  settings '])
@if($settings->isEmpty())

@component('components.empty',['section'=>' settings ']) @endcomponent

@else 

<table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>name  </th>
            <th>value </th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>  
@foreach($settings as $setting)
        <tr>
<th> <a href="/admin/setting/info/{{$setting->id}}">{{$setting->name}}</a></th>
<th> {{$setting->value}}</th>
<th><a href="/admin/setting/edit/{{$setting->id}}" class="btn btn-block btn-info btn-flat"> edit </a></th>
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