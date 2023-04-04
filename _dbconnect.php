<?php
$server = "localhost";
$username="root";
$password="";
$database="opr_db";

$conn= mysqli_connect($server,$username,$password,$database)
$sql="SELECT * FROM `registration`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
    echo $row;
}
?>