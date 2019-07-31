@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
طباعة الفاتورة 
      </h1>
      
    </section>
    <br/>
    <h3 style="color:black;text-align: center; "> 
       أذن صرف ألمونيوم 
    </h3>
<div class="box" >
             
             
            <div class="box-body">
            
            <h3 dir="rtl">
            <span class="col-md-6"> اسم العميل : {{$bill->customer_name}} </span>
                  <span class="col-md-6" >التاريخ : {{date('d-m-Y', strtotime($bill->created_at)) }} </span>
                  
            </h3> 
            <br/><br/>
            
             
            <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>القطاع</th>
                  <th>اللون </th>
                  <th>الوزن </th>
                  <th>السعر </th>
                  <th>الأجمالي </th>
                </tr>
                </thead>

                 <tbody >

                 @foreach( $sub_bills as $sub )   
                <tr>
                  
                  <td>
                  {{$sub->name}}
                  </td>
                   
                  <td>
                  {{$sub->color}}
                  </td>

                  <td>
                  {{$sub->weight}}
                  </td>

                  <td>
                  {{$sub->price}}
                  </td>

                  <td>
                  {{$sub->total_price}}
                  </td>

                </tr>
                @endforeach
                 
                <tr>
                  
                  <td>
                  
                  </td>
                   
                  <td>
                  <strong>
                  نقـــــــــــــــــل
                  </strong>
                  </td>

                  <td>
                  
                  </td>

                  <td>
                   
                  </td>

                  <td>
                  <strong>
                  20
                  </strong>
                  </td>

                </tr>
                      <tr>
                  
                  <td>
                  
                  </td>
                   
                  <td>
                  <strong>
                  الأجمــــــــــــــــــــالــــــــي
                  </strong>
                  </td>

                  <td>

                  </td>

                  <td>
                   
                  </td>

                  <td>
                  <strong>
                  {{$total + 20 }}
                  </strong>
                  </td>

                </tr> 

                 

                </tbody>
                      
                
              </table>

               
               
                         
 
            </div>
            <!-- /.box-body -->
          </div>

@endsection