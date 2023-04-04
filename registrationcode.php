<?php
session_start();
echo $_SESSION['CODE'];
include "DBmanager.php";
// include "captcha.php";
// $db=new DBmanager();
$alert = false;
$name=$_POST["name"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$cp = $_POST['captcha'];

// $captcha=$_POST["captcha"];
$password=$_POST["pass"];
$hash = password_hash($password,PASSWORD_DEFAULT);
$sql = "INSERT INTO `registration`(`name`, `email`, `dob`, `pass`) VALUES ('$name','$email','$dob','$hash')";
//echo $sql;
//for login
//$command="insert into login values('$email','$password')";

$result = mysqli_query($conn,$sql);
if($result)
{
  if($cp == $_SESSION['CODE']){

    $result = true;
     echo "<script>alert('You are Register Succesfully');window.location.href='registration.php';</script>";
   
  }
    
    // header("location:registration.php");
}
else{
// echo  mysqli_error($conn);
  if($cp != $_SESSION['CODE']){
    echo "<script>alert('Please enter valid captcha, Refresh it');window.location.href='registration.php';</script>";
}
else{
    echo "<script>alert('Registration Unsuccessfull');window.location.href='registration.php';</script>";
  }
}
// $result=mysqli_query($con,$sql);
//echo $result;
	   /*if($x)
	   {
        
   echo "<script>alert('your registration completed now');window.location.href='registration.php'</script>";
       }
   
   else
   {
       
       echo mysqli_connect_error();
         echo "<script>alert('your registration is not completed ');window.location.href='registration.php'</script>";	
   }*/

   ?>