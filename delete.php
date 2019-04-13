<?php
include "connect.php";
$event_name = $_POST['event'];
$result = mysqli_query($con,"select * from events where title='$event_name'");
$row = mysqli_fetch_assoc($result);
$event_id = $row['event_id'];
mysqli_query($con,"delete from event_attendies where event_id='$event_id'");
mysqli_query($con,"delete from events where event_id='$event_id'");
header("location:afterlogin.php");
 ?>
