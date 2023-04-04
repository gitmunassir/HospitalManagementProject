<?php

$servername="localhost";
$username="root";
$password="";
$database="opr_db";

$conn=mysqli_connect($servername,$username,$password,$database);









/*
class DBmanager
{
function  IUD($command)	
{
$con =mysqli_connect("localhost","root","","opr_db");
if($con)
{
	
	$x=mysqli_query($con,$command);
	if($x)
	{
	return true;	
	}
	else
	{
		
		return false;
	}
	
}
else
{
	mysqli_error($con);
}
}

}
*/
?>
