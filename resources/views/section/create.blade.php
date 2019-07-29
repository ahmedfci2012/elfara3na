@extends('layouts.master')

@section('content')

@if (session()->has('message'))
    
<div class="alert alert-success alert-dismissible" style="font-size:20px;font-weight:bold">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> تنبيه!</h4>
                {!! session('message') !!}
              </div>
    
@endif

<div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">بيانات القطاع  </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form   role="form" method="POST" action="{{ url('/sections/create') }}">
                        {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                   <label for="exampleInputEmail1">رقم القطاع</label>
                  <input type="text" name="num"  class="form-control"  placeholder="رقم القطاع  " required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">اسم القطاع</label>
                  <input type="text" name="name" class="form-control"  placeholder="اسم القطاع" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1"> كمية القطاع </label>
                  <input type="number" min="1" name="quantity" class="form-control"  placeholder="كمية القطاع" required>
                </div>
                 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">حفظ</button>
              </div>
            </form>
          </div>    
</div>
         
      </div>

@endsection