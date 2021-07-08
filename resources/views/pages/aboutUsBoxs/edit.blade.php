
@extends('layout.app',['title'=>'aboutUsBoxs '] )
@section('content')

@component('components.panel',['subTitle'=>'     aboutUsBoxs  '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">
<div class="text-center">

<img src="{{asset($aboutUsBox->image)}}" width=150px>
</div>
          <form role="form" action="{{route('aboutUsBox.edit.submit',$aboutUsBox->id)}}" method="post" enctype="multipart/form-data">
          @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNameAr"> name </label>
                    <input type="text" class="form-control" id="InputNameAr" value=" {{$aboutUsBox->name}}" name="name">
                  </div>
                  <div class="form-group">
                    <label for="InputNameEn"> description </label>
                    <input type="text" class="form-control" id="InputNameEn" value=" {{$aboutUsBox->description}}" name="description">
                  </div>
                  <div class="form-group">

                    <label for="InputFile"> صوره aboutUsBoxs </label>
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