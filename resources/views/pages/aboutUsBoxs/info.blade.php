
@extends('layout.app',['title'=>'aboutUsBox'] )
@section('content')

@component('components.panel',['subTitle'=>' aboutUsBox'])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{asset($aboutUsBox->image)}}" alt="User profile picture">
                </div>

                <ul class="list-group list-group-unbordered mb-3">
                     <li class="list-group-item">
                    <span>{{$aboutUsBox->name}}</span> <b class="float-left">name    </b>
                  </li>
                  <li class="list-group-item">
                    <span>{{$aboutUsBox->description}}</span> <b class="float-left">  description  </b>
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