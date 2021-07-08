@extends('layout.app',['title'=>'contact' ,'subTitle'=>'contact '])
@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection

@section('content')

@component('components.panel',['subTitle'=>'contact'])
@if($Complains->isEmpty())

@component('components.empty',['section'=>'contact ']) @endcomponent

@else 

<table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>id  </th>
            <th>name </th>
            <th> email </th>
            <th>message</th>
            <th>date</th>
        </tr>
        </thead>
        <tbody>  
@foreach($Complains as $Complain)
        <tr>
        <th> <a href="/admin/complains/info/{{$Complain->id}}"> {{$Complain->id}}</a></th> 
        <th> {{$Complain->name}}</th>   
        <th> {{$Complain->email}}</th>   
        <th> {{$Complain->message}}</th>   

<th>{{Carbon\Carbon::parse($Complain->created_at)->format('Y-m-d H:m a')}}</th>
          
        </tr>

        @endforeach  
        </tbody>
        <!--<tfoot>-->
        <!--<tr>-->
        <!--     <th>id  </th>-->
        <!--    <th>الرساله</th>-->
        <!--    <th> الحالة </th>-->
        <!--    <th>المستخدم</th>-->
        <!--    <th> المندوب</th>-->
        <!--    <th>التاريخ</th>-->
        <!--</tr>-->
        <!--</tfoot>-->
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