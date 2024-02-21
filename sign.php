<?php

  $name = $_POST['name'];
    $EMAIL = $_POST['mail']; 
  $password1 = $_POST['pwd'];
  $password2 = $_POST['cpwd'];  
  
      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "buggy";  
    

    $conn = mysqli_connect($host, $user, $password, $db_name);  
  
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO sign (Email,Password,Cpassword,name)
VALUES ('$EMAIL', '$password1', '$password2', 'name')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    ?>

