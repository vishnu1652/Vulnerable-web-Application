<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CSCC LABS</title>
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
    <div class="container mt-4 shadow-lg">
  <div class="row">
     <div class="col-md-3"></div>
       <div class="col-md-6">
        <h2 class="text-dark">Feed Back Form</h2>
        <form method="POST">
          <div class="form-group mt-3 mb-3">
            <label class="text-info" class="form-label"> Full Name:  </label>
            <input type="text" name="name" class="form-control" required="">
          </div>
          <div class="form-group mb-2">
            <label class="text-info" class="form-label"> Email: </label>
            <input type="text" name="email" class="form-control" required="">
          </div>
          
          <div class="form-group mb-2">
            <label class="text-info" class="form-label"> Your FeedBack : </label>
            <textarea rows="4" name="feedback" class="form-control" ></textarea>
          </div>
          <button type="submit" name="btn" class="btn btn-primary">Submit FeedBack</button>
       
          </form>
        </div>
      </div>
    </div>  
</div>

<?php
$conn=mysqli_connect("localhost","root","","buggy");

if(isset($_POST["btn"])){
  
   $name= $_POST['name'];
   $email=$_POST['email'];
   $feed=$_POST['feedback'];
   
   $query="INSERT INTO `feed`( `name`, `email`, `feedback`) VALUES ('$name','$email','$feed')";
   
  if(mysqli_query($conn,$query)){
    
    echo "<div class='alert alert-warning'> feedback submitted successfully</div>";
      
  }
  else{
    
   echo "REGISTER FAILED";
  
    
  }
}
?>      


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