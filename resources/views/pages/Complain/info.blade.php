@extends('layout.app',['title'=>'contact' ,'subTitle'=>' contact '])
@section('style')
<style>
.content-wrapper, .main-footer, .main-header{
  z-index:0;
}

</style>

@endsection

@section('content')
@component('components.panel',['subTitle'=>'  contact'])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <span>{{$Complain->name}}</span> <b class="float-right">name </b>
                  </li>

                  <li class="list-group-item">
                    <span>{{$Complain->email}}</span> <b class="float-right">email </b>
                  </li>


                  <li class="list-group-item">
                    <span>{{$Complain->message}}</span> <b class="float-right">Message </b>
                  </li>
                  
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      @endcomponent




      
 @endsection