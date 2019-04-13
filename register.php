<?php
include "connect.php";
$stu_name = $_POST['stu_name'];
$roll_no = $_POST['roll_no'];
$year = $_POST['year'];
$branch = $_POST['branch'];
$division = $_POST['division'];
$phone_no = $_POST['phone_no'];
$email_id = $_POST['email_id'];
$eventby = $_POST['eventby'];
$event_name = $_POST['event_name'];
$query = "select * from events where title='$event_name'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$event_id = $row['event_id'];
$admin_id = $row['admin_id'];

$forcheck = "dummy";
$query = "select * from students";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result))
{
  if($row['roll_no']==$roll_no)
  {
    $stu_id = $row['stu_id'];
    $forcheck = "notdummy";
    break;
  }
}
if($forcheck=="dummy")
{

  $query = "insert into students(stu_name,roll_no,year,branch,division,phone_no,email_id)
                        values('$stu_name','$roll_no','$year','$branch','$division','$phone_no','$email_id')";
  $result = mysqli_query($con,$query);
  $query = "select * from students where roll_no='$roll_no'";
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_assoc($result);
  $stu_id = $row['stu_id'];

}

$query = "insert into event_attendies(event_id,stu_id) values('$event_id','$stu_id')";
$result = mysqli_query($con,$query);

$query = "insert into students_admin(admin_id,stu_id) values('$admin_id','$stu_id')";
$result = mysqli_query($con,$query);

header("location:index.php");
 ?>
