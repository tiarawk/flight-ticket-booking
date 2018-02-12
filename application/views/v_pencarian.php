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
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Jelajah Dunia Nikmati Pelayanan Kami </h2>
            <p class="lead mb-5 probootstrap-animate">
            
          </div> 
          <div class="col-md probootstrap-animate">
            
          </div>
        </div>
      </div>
    </section>
    <div>
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
                </tr>
                <?php
                  $no=0;
                  foreach ($hasil as $obj1) {
                    $no++; 
                ?> 
                 <tr>

                  <td><?php echo $obj1->rute_from; ?></td>  
                  <td><?php echo $obj1->rute_to; ?></td> 
                  <td><?php echo $obj1->depart_at; ?></td>
                  <td><?php echo $obj1->arrive_at; ?></td>  
                  <td>

                  </td>
                 </tr>
                 <?php } ?>
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
    </div>
    <!-- END section -->


    

    <footer class="probootstrap_section probootstrap-border-top">
      <div class="container">
        <div class="row pt-5">
          <div class="col-md-12 text-center">
            <p class="probootstrap_font-14">&copy; 2017. All Rights Reserved. <br> Designed &amp; Developed by <a href="<?php echo base_url(); ?>https://probootstrap.com/" target="_blank">ProBootstrap</a><small> (Don't remove credit link on this footer. See <a href="<?php echo base_url(); ?>https://probootstrap.com/license/">license</a>)</small></p>
            <p class="probootstrap_font-14">Demo Images: <a href="<?php echo base_url(); ?>https://unsplash.com/" target="_blank">Unsplash</a></p>
          </div>
        </div>
      </div>
    </footer>

    
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  </body>
</html>