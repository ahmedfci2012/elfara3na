@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
قطاعات  الفاتورة          
 
      </h1>
      
    </section>
    <br/>
    
<div class="box">
             
            <!-- /.box-header -->
            <div class="box-body">
            <form method="POST" action="{{ url('/bills/create') }}">
            {{ csrf_field() }}
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>القطاع</th>
                  <th>اللون </th>
                  <th>الوزن </th>
                  <th>السعر </th>
                </tr>
                </thead>

                 <tbody>

                 @foreach( $sections as $section )   
                <tr>
                  
                  <td>{{$section->name}}
                  </td>
                   
                  <td>
                  <input type="text" name="color{{$section->id}}" id="{{$section->id}}" placeholder= "" required>
                  </td>

                  <td>
                  <input type="number" name="weight{{$section->id}}" id="{{$section->id}}" placeholder= ""  required>
                  </td>

                  <td>
                  <input type="number" name="price{{$section->id}}" id="{{$section->id}}" placeholder= ""  required>
                  </td>

                </tr>
                @endforeach
                 
                            
                </tbody>
                      
                
              </table>

               
              <div class="form-group">
                   <label for="exampleInputEmail1">اسم العميل</label>
                  <input type="text" name="customer"  class="form-control"  placeholder="اسم العميل  " required>
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-success" >
                                    <i class="fa fa-btn btn-big fa-save"></i> حفظ الفاتورة
                                </button>
               </div>

               
                         

         
                   
              </form>
            </div>
            <!-- /.box-body -->
          </div>

@endsection