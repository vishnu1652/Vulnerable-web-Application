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
<table class="table table-borderless table-dark">
  
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">FEEDBACK</th>  
    </tr>
<?php
$conn=mysqli_connect("localhost","root","","buggy");

$query="select * from feed";

$res=mysqli_query($conn,$query);
	
	
	
	
		
		while($row=mysqli_fetch_array($res)){
			
			echo "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['feedback']."</td>";
			
			echo "</tr>";
		}
		
	
	
	

?>
</table>
<div style="
    background-image: url('images/student.jpg');
    height: 100vh;
    width: 100vw;
    background-size: cover;

  ">
  </div>
</html>
