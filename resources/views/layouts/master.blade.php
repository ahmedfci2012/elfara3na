<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>الفراعنة</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel='stylesheet' href='{{asset("bootstrap/css/bootstrap.min.css")}}'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel='stylesheet' href='{{asset("plugins/datatables/dataTables.bootstrap.css")}}'>
  <!-- Theme style -->
  <link rel='stylesheet' href='{{asset("dist/css/AdminLTE.min.css")}}'>
  <link rel='stylesheet' href='{{asset("dist/css/skins/_all-skins.min.css")}}'>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('layouts.header')
@include('layouts.sidemenue')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @include('layouts.footer') 

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script type='text/javascript' src='{{asset("plugins/jQuery/jquery-2.2.3.min.js")}}'></script>

<!-- Bootstrap 3.3.6 -->
<script type='text/javascript' src='{{asset("bootstrap/js/bootstrap.min.js")}}'></script>
<!-- DataTables -->
<script type='text/javascript' src='{{asset("plugins/datatables/jquery.dataTables.min.js")}}'></script>
<script type='text/javascript' src='{{asset("plugins/datatables/dataTables.bootstrap.min.js")}}'></script>
<script type='text/javascript' src='{{asset("plugins/slimScroll/jquery.slimscroll.min.js")}}'></script>


<!-- FastClick -->
<script type='text/javascript' src='{{asset("plugins/fastclick/fastclick.js")}}'></script>
<!-- AdminLTE App -->
<script type='text/javascript' src='{{asset("dist/js/app.min.js")}}'></script>
<!-- AdminLTE for demo purposes -->
<script type='text/javascript' src='{{asset("dist/js/demo.js")}}'></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
