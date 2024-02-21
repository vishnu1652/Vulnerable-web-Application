
<?php

     
  $newpass = $_POST['pwd'];  
  
      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "buggy";  
    

    $conn = mysqli_connect($host, $user, $password, $db_name);  
  
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO forgot password (Email,Password)
VALUES ('$EMAIL', '$password1')";

if (mysqli_query($conn, $sql)) {
  echo "Your password created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    ?>
