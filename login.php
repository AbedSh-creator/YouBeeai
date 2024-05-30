<?php
session_start();
$con2 = mysqli_connect("localhost","root","","signup");

$email=$_POST['txt_email'];
$password=$_POST['txt_password'];

$sql="SELECT * FROM users WHERE db_email='$email' AND db_password='$password'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
   $_SESSION['user']=$email; 
   header("location:dashboard.php");
}
else
   header("location:login.php");


?>