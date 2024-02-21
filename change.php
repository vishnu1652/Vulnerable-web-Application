<?php session_start();?>


<html>
<head>
	<titile>Change Password</titile>
</head>
<body>
	<?php
      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "buggy";  
    

    $conn = mysqli_connect($host, $user, $password, $db_name);  
  
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
	$email = $_POST['useremail'];
	$Opwd = $_POST['pwd'];
	$npwd = $_POST['npwd'];
	$cpwd = $_POST['cpwd'];

$sql = "Select email from sign where Email='$email' and Password='$Opwd'";
$res=mysqli_query($conn, $sql);
$count=mysqli_fetch_assoc($res);

if($count > 0){

	$con = mysqli_query($conn, "UPDATE `sign` SET `Password`='$npwd' where Email='$email'");
	$_SESSION['msg1'] = "Password changed successfully";

}else{
	$_SESSION['msg2'] = "Password does not match";
}



}




?>

<p style="color:red;"><?php echo $_SESSION['msg1'];?><?php $_SESSION['msg1'] =""; ?></p>

	<form name="chngpwd" action="" method="post" onsubmit="return valid();">
		<table align="center">
			<tr height="50">
				<td>EMAIL ID: </td>
				<td><input type="text" name="useremail" id="useremail"></td>
			</tr>

			<tr height="50">
				<td>Old Password</td>
				<td><input type="Password" name="pwd" id="pwd"></td>
			</tr>
			<tr height="50">
				<td>New Password</td>
				<td><input type="Password" name="npwd" id="npwd"></td>
			</tr>
			<tr height="50">
				<td>Confirm Password</td>
				<td><input type="Password" name="cpwd" id="cpwd"></td>
			</tr>
			<td><input type="submit" name="submit" value="submit"></td>

</table>
</form>
</body>
</html>
