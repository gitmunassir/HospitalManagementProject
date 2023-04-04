<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "opr_db";
$con = mysqli_connect($server,$user,$pass,$db);
$email = $_POST['email'];
$password = $_POST['pass'];
$sql = "SELECT * FROM `registration`  WHERE `email` = '$email'  ";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
if($num == 1 )
{
	while($row = mysqli_fetch_assoc($result)){
		if(password_verify($password,$row['pass'])){
		session_start();
		//echo "success";
		$_SESSION['email'] = $email;
	header("location:dashboard.php");
		}
	}
}
else{
   header("location:opr.php");
}
?>