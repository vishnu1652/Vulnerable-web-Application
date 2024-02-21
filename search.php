<html>


<?php
    
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "buggy";  
    

    $conn = mysqli_connect($host, $user, $password, $db_name);  

    if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
  
if(isset($_POST['search'])){

    $emp=$_POST['search'];
    

    $sql=("select * from searchh where name like '%$emp%'") or die("could not search");
       

$res=mysqli_query($conn, $sql);
$count=mysqli_num_rows($res);
    
    
    
    if($count>0){
            
            while ($row=mysqli_fetch_array($res)){

                
                $emp=$row['name'];
                echo $emp;
            }} 
            else {
        
        
    echo "<div class='alert alert-danger'> ";
    echo  $_POST['search'];
                return ($sql);
    
    }
    

}

    ?>
<head>
    </head>
    <div style="
    background-image: url('images/student.jpg');
    height: 100vh;
    width: 100vw;
    background-size: cover;

  ">
  </div>
  
</html>













