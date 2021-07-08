
@extends('layout.app',['title'=>'settings '] )
@section('content')

@component('components.panel',['subTitle'=>'  settings  '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">

          <form role="form" action="{{route('setting.edit.submit',$setting->id)}}" method="post" enctype="multipart/form-data">
          @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="InputNameEn"> {{$setting->name}} </label>
                    <input type="text" class="form-control" id="InputNameEn" value=" {{$setting->value}}" name="value">
                  </div>
            
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">save</button>
                </div>
              </form>
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