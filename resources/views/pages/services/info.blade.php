
@extends('layout.app',['title'=>'services'] )
@section('content')

@component('components.panel',['subTitle'=>' services '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{asset($service->image)}}" alt="User profile picture">
                </div>




                <ul class="list-group list-group-unbordered mb-3">
                     <li class="list-group-item">
                    <span>{{$service->name}}</span> <b class="float-right">name    </b>
                  </li>
                  <li class="list-group-item">
                    <span>{{$service->description}}</span> <b class="float-right">description </b>
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