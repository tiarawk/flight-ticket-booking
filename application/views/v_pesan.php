<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title> Reavion - Booking Tiket Pesawat </title>
  <meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">


  <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.css">


  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/helpers.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>/">Reavion</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="ion-navicon"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="probootstrap-menu">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>city-guides.html">Cek Pemesanan</a></li>
          <li class="nav-item"><a href="<?php echo base_url(); ?>#" class="nav-link" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
          <li class="nav-item"><a href="<?php echo base_url(); ?>#" class="nav-link" data-toggle="modal" data-target="#myModal4" >Sign In</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->


  <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url() ?>assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5"  id="section-home">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md">
          
          <p class="lead mb-5 probootstrap-animate">

          </div> 
          <div class="col-md probootstrap-animate">

          </div>
        </div>
      </div>
    </section>
<?php
  $depart_at = "";
  $arrive_at = "";
  $rute_from = "";
  $rute_to = "";
  $price = "";

  foreach($detail->result() as $obj) {
    
    $depart_at = $obj->depart_at;
    $arrive_at = $obj->arrive_at;
    $rute_from = $obj->rute_from;
    $rute_to = $obj->rute_to;
    $price = $obj->price;

  }
  ?>
 	 <div class="row2">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>From</th>
                  <th>To</th>
                  <th>Depart</th>
                  <th>Arrive</th>
                  <th></th>
                </tr>
                  <tr>

                    <td><?php echo $rute_from; ?></td>  
                    <td><?php echo $rute_to; ?></td> 
                    <td><?php echo $depart_at; ?></td>
                    <td><?php echo $arrive_at; ?></td>  
                    </td>
                  </tr>
                  
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.content -->
        </div>
      </div>
    </div>      
          <!-- /.box -->
          <!-- /.content -->

  

<?php require_once 'v_footer.php' ?>