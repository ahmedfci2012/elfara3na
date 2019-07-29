@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
      جميع القطاعات
        <small>جميع القطاعات</small>
      </h1>
      
    </section>
    <br/>

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>رقم</th>
                  <th>اسم</th>
                  <th>كمية</th>
                  <th>أفعال</th>
                </tr>
                </thead>
                <tbody>
                 @foreach( $sections as $section )   
                <tr>
                  <td>{{$section->num}}</td>
                  <td>{{$section->name}}
                  </td>
                  <td>{{$section->quantity}}</td>
                  <td>
                  <a class="btn btn-app" href='{{url("/subsection/index/$section->id")}}'>
                        <i class="fa fa-eye"></i> عرض
                  </a> 

                  <a class="btn btn-app">
                        <i class="fa fa-edit" style="color:blue;"></i> تصحيح
                  </a> 
                  <a class="btn btn-app">
                        <i class="fa fa-trash" style="color:red;"></i> حذف
                  </a> 
                  
                  </td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection