<?php 
$d= $_GET["d"];
$cmd="delete from registration where email='$d'";
require "DBmanager.php";
//Create  an Object 
$obj=new dbmanager();
$x=$obj->IUD($cmd);
if($x==true)
{
       echo "<script>alert('Record deleted');window.location.href='pdetail.php'</script>";
}
else
{
       echo "<script>alert('Record is not deleted');window.location.href='pdetail.php'</script>";   
}
?>