<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/in.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSCC COLLEGE</title>

    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	 <link href="css/style1.css" rel="stylesheet">
  
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index2.php"><img src=small.png alt="cscc college" width="45" height="30" class="d-inline-block align-top"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index2.php">HOME</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
            DEPARTMENTS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="bsc.php">BSC DIGITAL CYBER FORENSIC</a></li>
			<li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">HOTEL MANAGEMENT</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="ece.php">BSC ELECTRONICS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="about.html" >ABOUT US</a>
        </li>
      </ul>
      <form action="search.php" method="POST" class="d-flex form-inline my-2 my-lg-0" >
        <input class="form-control me-2"name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" name="bt" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  </div>
<div style="
    background-image: url('images/hotel2.jpg');
    height: 100vh;
    width: 100vw;
    background-size: cover;

  ">
  <br>
  <br>
  <br>
  <style>
    .h1 {
      text-align: center;
      color: white;
      font-size: 19px;
      font-family: Garamond;

    }
  </style>
  <h1 class="h1">SEARCH HERE</h1>
<?php
if(isset($_GET['s'])){
  show_source(__FILE__);
  exit;
}
libxml_disable_entity_loader(false);
$data = isset($_POST['data'])?trim($_POST['data']):'';
$resp = '';
if($data != false){
  $xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOENT);
  ob_start();
  var_dump($xml);
  $resp = ob_get_contents();
  ob_end_clean();
  
}
?>
<style>
div.main{
  width:90%;
  max-width:50em;
  margin:0 auto;
}
textarea{
  width:100%;
  height:10em;
  
}
input[type="submit"]{
  margin: 1em 0;
}
</style>
<div class="main">
  <form action="" method="POST">
    <textarea name="data">
<?php
echo ($data!=false)?htmlspecialchars($data):htmlspecialchars('');
?>
    </textarea><br/>
    <input style="" type="submit" value="submit"/>
    &nbsp;&nbsp;&nbsp;
     <input type="hidden" name=" csrf token" value="vvvv222888ggg"/>
  </form>
  <pre>
<?php echo htmlspecialchars($resp);?>
  </pre>
</div>
</div>
<h3 class="h1">HOD – Computer Science</h3>
<p class="para">Mr.V.Vasu, M.Phil/Ph.D
  <p>Associate Professor & Head, Department of Computer Science</p>

<img src='images/prof.jpg' alt="Paris" width="200" height="200">

<p class="parra">Mr. V.Vasu has twentytwo years of teaching experience. He has also presented research papers at International Conference and Published many research papers in International Journals. Hhe is a member of the PG Board of Studies of osmaina university and also a member of the Computer Society of India. He is constantly striving to promote Internet Technology, E-commerce and Neural Networks .</p>


<br>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <div class="container">
    <br>

    <br>
         
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Faculty Name  </th>
        <th>Designation</th>
        <th>Contact</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Dr.B.Sumathi</td>
        <td>Associate Professor </td>
        <td>sumathicscc@gmail.com</td>
       
      </tr>
      <tr>
        <td>Mr.B. Karuppusamy</td>
        <td>Associate Professor</td>
        <td>karuppusamy@cscc.com</td>
       
      </tr>
      <tr>
          <td>Mr.Vishnu</td>
        <td>Associate Professor</td>
        <td>vishnu@cscc.com</td>
        
      </tr>
    </tbody>
  </table>
</div>


<br>
<br>


<h1 class="heading">HOTEL MANAGEMENT GALLERY</h1>
<!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src='images/h1.jpg'
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src='images/h2.jpg'
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src='images/h3.jpg'
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src='images/h4.jpg'
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src='images/h5.jpg'
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src='images/h6jpg.jpg'
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
</div>
<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">CSCC COLLEGE</h5>

        <p>
          Cscc college established in the year 1990. Its a top most college in the india .
          The college is spread across a lush 26 acre complex with excellent infrastructure and offers 17 Undergraduate courses & 14 Postgraduate courses besides 7 M.Phil and 3 Ph.D research programmes.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="index2.php" class="text-dark">HOME</a>
          </li>
          <li>
            <a href="about.html" class="text-dark">ABOUT</a>
          </li>
          <li>
            <a href="#!" class="text-dark">ONLINE FEE PAYMENT</a>
          </li>
         
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
  
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="https://cscclabs.com/">cscc college</a>
  </div>
  <!-- Copyright -->
</footer>

<!-- Gallery --
<!End Hero No Slider Sectio -->

    <!-- Login -->
    <!-- Modal -->
    <!-- <a  href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</a>
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form class="loginform" action="/chinna/project/user.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" required>
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">  
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
              </form>
          </div>
    
        </div>
      </div>
    </div>
 -->
 <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
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