
@extends('layout.app',['title'=>'settings '] )
@section('content')

@component('components.panel',['subTitle'=>'  settings  '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">

          <form role="form" action="{{route('setting.edit.submit',$setting->id)}}" method="post" enctype="multipart/form-data">
          @csrf

                <div class="card-body">

@if($setting->id == 14)

<label for="InputFile">  logo </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="InputFile" name="value">
                        <label class="custom-file-label" for="InputFile"> </label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

@else 

<div class="form-group">
                    <label for="InputNameEn"> {{$setting->name}} </label>
                    <input type="text" class="form-control" id="InputNameEn" value=" {{$setting->value}}" name="value">
                  </div>


@endif

            
                  
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