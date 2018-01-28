<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title> Reavion - Booking Tiket Pesawat </title>
		<meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com">
		<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/select2.css">
    

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>
  

    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
      <div class="container">
        <a class="navbar-brand" href="/">Reavion</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="city-guides.html">Cek Pemesanan</a></li>
            <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
            <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#myModal4" >Sign In</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5"  id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Jelajah Dunia Nikmati Pelayanan Kami </h2>
            <p class="lead mb-5 probootstrap-animate">
              

            
          </div> 
          <div class="col-md probootstrap-animate">
            <form action="<?php echo base_url('admin/tambah_aksi'); ?>" method="post" class="probootstrap-form">
              <div class="form-group">
                <div class="row mb-3">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single">Dari</label>
                      <label for="id_label_single" style="width: 100%;">
                       <input type="text" class="form-control" name="from">
                      </label>


                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single2">Ke</label>
                        <label for="id_label_single2" style="width: 100%;">
                        <input type="text" class="form-control" name="to">
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END row -->
                <div class="row mb-5">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="probootstrap-date-departure">Berangkat</label>
                      <div class="probootstrap-date-wrap">
                        <span class="icon ion-calendar"></span> 
                        <input type="text" id="probootstrap-date-departure" class="form-control" placeholder="" name="depart">
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="probootstrap-date-arrival">Harga</label>
                      <div class="probootstrap-date-wrap"> 
                        <input type="text"  class="form-control" placeholder="" name="price">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- END row -->
                <div class="row mb-5">
                  <div class="col-md">                    
                    <div class="form-group">
                      <label for="probootstrap-date-arrival">Penumpang</label>
                        <input type="text"  class="form-control" placeholder="" name="passenger">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md">
                    <input type="submit" value="Submit" class="btn btn-primary btn-block">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- sign -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
            </div>
              <section>
                <div class="modal-body modal-spa">
                  <div class="login-grids">
                    <div class="login">
                      <div class="login-right">
                        <form action="<?php echo base_url(); ?>admin/adduser" method="POST">

                          <h3>Create your account </h3>
                          <input type="text" value="Nama" name="nama" onfocus="this.value = '';"onblur="if (this.value == '') {this.value = 'Nama';}" required="">

                          <input type="text" value="Username" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">

                          <input type="text" value="No Handphone" name="hp" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'No Handphone';}" required="">

                          <input type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">  

                          <input type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required=""> 
                          <input type="submit" value="CREATE ACCOUNT">
                        </form>
                      </div>
                        <div class="clearfix"></div>                
                    </div>
                      
                  </div>
                </div>
              </section>
          </div>
        </div>
      </div>
<!-- //sign -->
<!-- signin -->
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-info">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>            
            </div>
                  <div class="login-right">
                    <form>
                      <h3>Signin with your account </h3>
                      <input type="text" value="Enter your mobile number or Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required=""> 
                      <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required=""> 
                      <h4><a href="#">Forgot password</a></h4>
                      <div class="single-bottom">
                        <input type="checkbox" id="brand" value="">
                        <label for="brand"><span></span>Remember Me.</label>
                      </div>
                      <input type="submit" value="SIGNIN">
                    </form>
                  </div>
                  <div class="clearfix"></div>                
                </div>
                <p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- //signin -->
    
    </section>
    <!-- END section -->


    

    <footer class="probootstrap_section probootstrap-border-top">
      <div class="container">
        <div class="row pt-5">
          <div class="col-md-12 text-center">
            <p class="probootstrap_font-14">&copy; 2017. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://probootstrap.com/" target="_blank">ProBootstrap</a><small> (Don't remove credit link on this footer. See <a href="https://probootstrap.com/license/">license</a>)</small></p>
            <p class="probootstrap_font-14">Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
          </div>
        </div>
      </div>
    </footer>

    
    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/main.js"></script>
	</body>
</html>