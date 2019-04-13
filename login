<?php
include 'connect.php';
$user_name=$_POST['uname'];
$password=$_POST['psw'];
$password=md5($password);
$query = "select * from admin where user_name='$user_name' and password='$password'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
if($row['user_name']==$user_name && $row['password']==$password)
{
  header("location:");
}
if($row['user_name']!=$user_name || $row['password']!=$password)
{
  echo '<script language="javascript">';
  echo 'alert("Enter valid data")';
  echo '</script>';
}

 ?>
