<?php
$con = mysqli_connect("localhost","root","","signup");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if(empty($name) || empty($email) ||empty($password)) {
   header("location:signup.php?flag=1");  
}
else{
$sql = "INSERT INTO newuser (db_name,db_email,db_password) VALUES ('$name','$email','$password')";
$result = mysqli_query($con,$sql);
header("location:signup.php?flag=2");
}


?>