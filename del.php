<?php 
$d= $_POST["d"];
$cmd="delete from contact where mob=$d";
require "DBmanager.php";
//Create  an Object 
$obj=new dbmanager();
$x=$obj->IUD($cmd);
if($x==true)
{
       echo "<script>alert('Record deleted');window.location.href='emanagement.php'</script>";
}
else
{
       echo "<script>alert('Record is not deleted');window.location.href='emanagement.php'</script>";   
}
?>