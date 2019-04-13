<?php
include 'connect.php';
$uname=$_POST['uname'];
$password=$_POST['psw'];
$password=md5($password);
$query = "INSERT INTO admin (user_name,password)
  			  VALUES('$uname','$password')";
  	mysqli_query($con, $query);
 ?>
