
@extends('layout.app',['title'=>'pricing '] )
@section('content')

@component('components.panel',['subTitle'=>'     pricing  '])
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">

          <form role="form" action="{{route('pricing.edit.submit',$pricing->id)}}" method="post" enctype="multipart/form-data">
          @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNameAr"> name </label>
                    <input type="text" class="form-control" id="InputNameAr" value=" {{$pricing->name}}" name="name">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> price </label>
                    <input type="number" class="form-control" id="InputNameEn" value="{{$pricing->price}}" name="price">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> type </label>
                    <select name='date'  class="form-control">
                    <option value="month" selected>month</option>

                    <option value="year" >year</option>
                    </select>
                  </div>



                  <div class="form-group">
                    <label for="InputNameEn"> list </label>
<textarea name="list" class="form-control">
{{$pricing->list}}
</textarea>
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