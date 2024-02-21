<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  	<link href="css/style1.css" rel="stylesheet">
  
	  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
</head>

	
		 <header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left d-none d-lg-block ">
        <a href="index-2.html"><img src="images/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu  float-right  d-lg-block">

        <ul>
          <li ><a href="index.php">Home</a></li>
          <li class="active"><a  href="login.php" >Log In</a></li>
          <li> <a  href="signup.php" >Sign Up</a></li>
        </ul>
      </nav><!-- .nav-menu -->

  
  </header>
  
  <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center" style="background: linear-gradient(to right, rgba(30, 67, 86, 0.8), rgba(30, 67, 86, 0.6)), url('images/mainn.jpg') center top no-repeat;">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100" >
      <div class="row justify-content-center">
        <div class="col-xl-8">
        	<form action="log.php"  method="post" >
          <div class="mb-3">
			 
			    <input type="text" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
			    
			  </div>
			  <div class="mb-3">
			   
			    <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="password">
			  </div>
          <?php
         if (isset($_GET['action'])&& $_GET['action']=="error")

         {
          echo "invalid login details";

         }
         ?>
              <?php
         if (isset($_GET['action'])&& $_GET['action']=="token_error")

         {
          echo "something went wrong";

         }
         ?>
         <br>
			 
			  <button type="submit" class="btn btn-primary">LOGIN</button>
        <input type="hidden" name="csrf_token" value="R6B7hoBQd0wfG5Y6qOXHPNm4b9WKsTq6Vy6Jssxb"/>
         </form>
        </div>
      </div>
    </div>
  </section>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/script.js"></script>
 

</body>
</html>