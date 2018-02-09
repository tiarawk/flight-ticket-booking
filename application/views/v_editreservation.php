<?php
$id = "";
$re_code = "";
$re_at = "";
$re_date = "";
$seatcode = "";
$depart_to = "";
$price = "";
$transportation_id = "";
$customer_id = "";
$rute_id = "";

if($op=="edit"){
    foreach ($sql->result() as $obj){
         
          $op = "edit";
          $id = $obj->id;
          $re_code = $obj->re_code;
          $re_at = $obj->re_at;
          $re_date = $obj->re_date;
          $seatcode = $obj->seatcode;
          $depart_to = $obj->depart_to;
          $price = $obj->price;
          $transportation_id = $obj->transportation_id;
          $customer_id = $obj->customer_id;
          $rute_id = $obj->rute_id;
          


    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminLTE//dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminLTE/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminLTE/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminLTE/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url();?>assets/adminLTE/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url();?>assets/adminLTE/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>User</span>
          </a>
        </li>
       

       <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Reservation</span>
          </a>
        </li>

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Rute</span>
          </a>
        </li>

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Transportation</span>
          </a>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php require_once 'v_headeradmin.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Reservation
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      
      <form action="<?php echo base_url(); ?>c_reservation/tambah" method="post">
              <div class="box-body">
                <div class="form-group">

                  <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">
                  <input type="hidden" name="op" value="<?php echo $op; ?>" class="form-control">

                  <div class="form-group">
                  <label>Code Reservation</label>
                  <input name="re_code" type="text" class="form-control" placeholder="Masukan Code Reservation" value="<?php echo $re_code; ?>">
                  </div>

                <div class="form-group">
                  <label>Tempat Pemesanan</label>
                  <input name="re_at" type="text" class="form-control" placeholder="" value="<?php echo $re_at; ?>">
                </div>

                <div class="form-group">
                  <label>Tanggal Pemesanan</label>
                  <input name="re_date" type="re_date" class="form-control" placeholder="" value="<?php echo $re_date; ?>">
                </div>

                 <div class="form-group">
                  <label>Tanggal Pemesanan</label>
                  <input name="re_date" type="re_date" class="form-control" placeholder="" value="<?php echo $re_date; ?>">
                </div>
                
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>

    </section>


<!-- /.row -->

        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    <!-- /.content -->
</div>
  </div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/adminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/adminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/adminLTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/adminLTE/dist/js/demo.js"></script>
</body>
</html>


