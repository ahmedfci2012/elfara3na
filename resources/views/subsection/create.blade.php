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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">القطاع الحالي </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>رقم القطاع</th>
                  <th>اسم القطاع</th>
                  <th>الكمية</th>
                </tr>
                
                <tr style="font-size:20px;font-weight:bold;color:blue">
                  <td>{{$section->num}}</td>
                  <td>{{$section->name}}</td>
                  <td>{{$section->quantity}}</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" > مكونات القطاع رقم <span style="font-size:20px;font-weight:bold;color:blue">{{$section->num}}</span> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>رقم المكون</th>
                  <th>اسم المكون</th>
                  <th>الكمية</th>
                  <th> الاحداث</th>
                </tr>
                
                
                @foreach($sub_sections as $sub)
                <tr style="font-size:20px;font-weight:bold;color:green">
                  <td>{{$sub->num}}</td>
                  <td>{{$sub->name}}</td>
                  <td>{{$sub->quantity}}</td>
                  <td>
                   

                  <a class="btn btn-warning">
                        <i class="fa fa-edit" style="color:blue;"></i> تصحيح
                  </a> 
                  <a class="btn btn-danger">
                        <i class="fa fa-trash" style="color:red;"></i> حذف
                  </a> 
                  </td>
                </tr>
                @endforeach


              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box">
            <div class="box-header" >
              <h3 class="box-title">ادخل الاجزاء في القطاع رقم <span style="font-size:20px;font-weight:bold;color:blue">{{$section->num}}</span>   </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form   role="form" method="POST" action="{{ url('/subsections/create') }}">
                        {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                   <label for="exampleInputEmail1">رقم المكون</label>
                  <input type="text" name="num"  class="form-control"  placeholder=" أدخل رقم المكون " required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">اسم المكون</label>
                  <input type="text" name="name" class="form-control"  placeholder="أدخل اسم المكون " required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1"> كمية المكون </label>
                  <input type="number" min="1" name="quantity" class="form-control"  placeholder="كمية المكون أدخل " required>
                </div>
                <input type="number" min="1" name="section_id"  value={{$section->id}} hidden>                 
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