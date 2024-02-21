<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/feed.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tastyhub</title>
    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	
	<style>
	table{
		text-align:center;
	}
	</style>
	
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src=logo.png alt="navbar" width="45" height="30" class="d-inline-block align-top"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">services</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
			<li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" >contact us</a>
        </li>
      </ul>
      <form action="search.php" method="POST" class="d-flex form-inline my-2 my-lg-0" >
        <input class="form-control me-2"name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" name="bt" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<table class="table table-striped table-hover table-info">
<tr>
<th>Name</th>
<th>Email</th>
<th>feedback</th>

</tr>

<?php
$conn=mysqli_connect("localhost","root","","deadline");

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
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="index.php" type="submit" name="btn" class="btn btn-primary me-md-2" >Back to home</a>
 
</div>

</body>
</html>