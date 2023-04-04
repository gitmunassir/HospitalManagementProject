<?php
include "DBmanager.php";
$name=$_POST["name"];
$email=$_POST["email"];
$mob=$_POST["mob"];
$dt=date("d/m/y");
//Create  an Object 
//command here
$cmd="INSERT INTO `contact` values('$name','$email','$mob','$dt')";
//calling of function 
$x=mysqli_query($conn,$cmd);
if($x)
{
	echo "<script>alert('Record Saved We will reply you soon!');window.location.href='contact.php'</script>";
}
else
{
	echo mysqli_connect_error();
	echo "<script>alert('Record  not Saved');window.location.href='contact.php'</script>";	
}


?>