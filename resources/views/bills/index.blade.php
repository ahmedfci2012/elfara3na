@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
انشاء فاتورة          
 <small>انشاء فاتورة</small>
      </h1>
      
    </section>
    <br/>
    @if (Session :: has ('bills') && count (Session :: get ('bills'))>0 )
        
         
           
          <a class="btn btn-success" href='{{url("/bills/bill")}}' >
                        انهاء الفاتورة

          </a> 

        @endif
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>اسم</th>
                  <th>اضافة </th>
                </tr>
                </thead>
                <tbody>
                 @foreach( $sections as $section )   
                <tr>
                  
                  <td>{{$section->name}}
                  </td>
                   
                  <td>
                  <a class="btn btn-app" href='{{url("/bills/add/$section->id")}}'>
                        <i class="fa fa-plus"></i> اضافة القطاع الي الفاتورة
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