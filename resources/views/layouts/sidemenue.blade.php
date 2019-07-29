<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
       
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        
      <li>
          <a href="{{ url('/') }}">
            <i class="fa fa-calendar"></i> <span>عرض القطاعات</span>
            
          </a>
        </li>

        <li>
          <a href="{{ url('/sections/index') }}">
            <i class="fa fa-calendar"></i> <span>اضافة قطاع</span>
            
          </a>
        </li>


       
         
         </ul>
    </section>
    <!-- /.sidebar -->
  </aside>