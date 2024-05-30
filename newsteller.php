<?php
$con1 = mysqli_connect("localhost","root","","school");

$email = $_POST["email"];

if(empty($email))
   header("location:test2.html");
else{
$sql = "INSERT INTO newsteller (email) VALUES ('$email')";

$result = mysqli_query($con1,$sql);
header("location:test2.html");
}
?>