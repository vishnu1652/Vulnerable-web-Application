
<?php

session_start();
$_SESSION['token']="R6B7hoBQd0wfG5Y6qOXHPNm4b9WKsTq6Vy6Jssxb";
$token=$_POST['csrf_token'];

    $EMAIL = $_POST['mail']; 
  $password1 = $_POST['pwd'];  
  
      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "buggy";  
    

    $conn = mysqli_connect($host, $user, $password, $db_name);  
  
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($token==$_SESSION['token'])
{



$sql = "Select email from sign where email='$EMAIL' and Password='$password1'";
$res=mysqli_query($conn, $sql);

$count=mysqli_fetch_assoc($res);

if($count > 0){
  $mail=$count['email'];

  $_SESSION['user']=$count['email'];
  header("Location:admin.php");
    
  
  // else{
  //   $_SESSION['user']=$count['email'];
  //   header("Location:index2.php");
  // }
}
  
else{
 

   
  echo "invalid user name and password";
  header("Location:login.php?action=error");
  
}
}
else
{
   header("Location:login.php?action=token_error");

}
    ?>