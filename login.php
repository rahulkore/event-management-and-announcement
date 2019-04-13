<?php
session_start();
include 'connect.php';
$user_name=$_POST['uname'];
$password=$_POST['psw'];
$password=md5($password);
$query = "select * from admin where user_name='$user_name' and password='$password'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$_SESSION['uname']=$user_name;
if($row['user_name']==$user_name && $row['password']==$password)
{
  header("location:afterlogin.php");
}
if($row['user_name']!=$user_name || $row['password']!=$password)
{
  echo '<script language="javascript">';
  echo 'alert("Enter valid data")';
  echo '</script>';

}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>oops</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
     <style media="screen">
     .round{
   height: 150px;
   width: 150px;
   margin-top: 150px;
   border-radius: 150px;
   background: #FFC107;
   border: 1px solid #FFC107;
   box-shadow: 0 5px 5px rgba(31, 28, 28, 0.73);
 }
 .eye{
   height: 20px;
   width: 20px;
   border-radius: 20px;
   margin-top: 50px;
   margin-left: -55px;
   background: #5c3a13;
 }
 .eye1{
    height: 20px;
   width: 20px;
   border-radius: 20px;
   background: #5c3a13;
   margin-top: -19px;
   margin-right: -45px;
 }
 .mouth{
   height: 10px;
   width: 70px;
   margin-top:30px;
   border-radius: 50px;
   background: #5c3a13;
 }
     </style>
   </head>
   <body class="blue-grey">
     <center>
            <div class="round">
            <div class="eye">
                </div>
                <div class="eye1">
                </div>
                <div class="mouth">
                </div>
            </div>

            </center>

 <center><h1>!!!WRONG CREDENTIALS!!!!</h1></center>

 <div class="container center" id="div1">
   <a href="index.php" class="btn btn-large">GO BACK</a><br><br>
 </div>

   </body>
 </html>
