<?php
session_start();
include_once "connect.php";
$user_name = $_SESSION['uname'];
$title = $_POST['title'];
$seats = $_POST['seats'];
$duration = $_POST['duration'];
$venue = $_POST['venue'];
$date = $_POST['date'];
$eventby = $_POST['eventby'];
$query = "select * from admin where user_name='$user_name'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$admin_id = $row['admin_id'];
$query = "insert into events(title,seats,e_duration,e_venue,e_date,event_by,admin_id)
                      values('$title','$seats','$duration','$venue','$date','$eventby','$admin_id')";
$result = mysqli_query($con, $query);
header("location:afterlogin.php");
 ?>
