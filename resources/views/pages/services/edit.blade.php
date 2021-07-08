
@extends('layout.app',['title'=>'services '] )
@section('content')

@component('components.panel',['subTitle'=>'   edit  service  '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">
<div class="text-center">

<img src="{{asset($service->image)}}" width=150px>
</div>
          <form role="form" action="{{route('service.edit.submit',$service->id)}}" method="post" enctype="multipart/form-data">
          @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNameAr"> name </label>
                    <input type="text" class="form-control" id="InputNameAr" value="{{$service->name}}" name="name">
                  </div>
                  <div class="form-group">
                    <label for="InputNameEn"> description </label>
                    <input type="text" class="form-control" id="InputNameEn" value="{{$service->description}}" name="description">
                  </div>

                  </div>
                  <div class="form-group">

                    <label for="InputFile"> image services </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="InputFile" name="image">
                        <label class="custom-file-label" for="InputFile"> </label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">send</button>
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