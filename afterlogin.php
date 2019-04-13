<?php session_start();
include "connect.php";
$sql = "truncate table dummy";
mysqli_query($con,$sql);
 ?>

<DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin page</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
    </script>
    <style>
    body
    {
      background-image: url("clg.jpg");

    }
      #div1{
        float: right;
        width: 20%;
      }
      #div2{
        margin-top: 70px;
        float: right;
        width: 20%;
      }
      footer{
        margin-top: 500px;
      }

input[type="submit"]{
  width: 100%;
  margin-top: 50px;
}
.modal-close{
  position: absolute;
  top:10px;
  right:10px;
  padding:0;
  margin:0;
}
    </style>
  </head>
  <body class="grey lighten-1">
    <img src="clg2.jp" alt="">
    <header>
      <nav class="black">
        <a href="#" class="brand-logo">V-Events</a>
          <ul class="right">
            <li>
              <i class="material-icons prefix">logout</i>
            </li>
            <li>
              <a href="logout.php">LOGOUT</a>

            </li>

          </ul>
      </nav>
    </header>
    <div class="container center" id="div1">
      <a href="#data" class="btn btn-large teal modal-trigger">see registered students</a><br><br>
      <a href="#login" class="btn btn-large teal modal-trigger">ADD EVENTS</a><br><br>
      <a href="#delete" class="btn btn-large teal modal-trigger">DELETE EVENT</a>
    </div>


    <div id="login" class="modal ">
      <h5 class="modal-close">&#10005;</h5>
      <div class="modal-content center">
        <h4>ADD EVENTS</h4>
        <br>

        <form action="addevent.php" method="post">

          <div class="input-field">
            <i class="material-icons prefix">event</i>
            <input type="text" name="title">
            <label for="name">Event Name</label>
          </div>
          <br>

          <div class="input-field">
            <i class="material-icons prefix">event</i>
            <input type="text" name="seats">
            <label for="seats">No Of Seats</label>
          </div>
          <br>

          <div class="input-field">
            <i class="material-icons prefix">event</i>
            <input type="text" name="duration">
            <label for="duration">Duration</label>
          </div>
          <br>

          <div class="input-field">
            <i class="material-icons prefix">event</i>
            <input type="text" name="venue">
            <label for="venue">Venue</label>
          </div>
          <br>

          <div class="input-field">
            <i class="material-icons prefix">event</i>
            <input type="date" name="date">
            <label for="date"></label>
          </div>
          <br>

          <div class="input-field">
            <i class="material-icons prefix">home</i>
            <input type="text" name="eventby">
            <label for="eventby">Name of the Committee</label>
          </div>
          <br>



          <input type="submit" value="ADD" class="btn btn-large">

        </form>
      </div>
    </div>

    <div id="data" class="modal ">
      <h5 class="modal-close">&#10005;</h5>
      <div class="modal-content center">
        <h4>Event Name</h4>
        <br>

        <form action="display.php" method="post">

          <div class="input-field">
            <i class="material-icons prefix">event</i>
            <input type="text" name="event">
            <label for="event">Enter events name</label>
          </div>
          <br>


          <input type="submit" value="SEE" class="btn btn-large">

        </form>
      </div>
    </div>


    <div id="delete" class="modal ">
      <h5 class="modal-close">&#10005;</h5>
      <div class="modal-content center">
        <h4>Event Name</h4>
        <br>



        <form action="delete.php" method="post">

          <div class="input-field">
            <i class="material-icons prefix">event</i>
            <input type="text" name="event">
            <label for="event">Enter events name</label>
          </div>
          <br>


          <input type="submit" value="DELETE" class="btn btn-large">

        </form>
      </div>
    </div>







    <footer class="page-footer grey darken-3">
        <div class="container" id="footer">
            <div class="row">
                <div class="col s12 l6">
                    <h5>About us</h5>
                    <p>T.E CMPN A BATCH2 WEBDESIGN + DATABASE PROJECT</p>
                    <ul>
                        <li>Rahul Kore-16102A0031</li>
                        <li>Akshay Naikwadi-16102A0024</li>
                        <li>Bhupesh Patil-16102A0018</li>
                    </ul>
                </div>
                <div class="col s12 l4 offset-l2">
                    <h5>Connect <i class="material-icons ">language</i> </h5>
                    <ul>
                        <li><a href="#" class="grey-text text-lighten-3">Facebook</a></li>
                        <li><a href="#" class="grey-text text-lighten-3">Twitter</a></li>
                        <li><a href="#" class="grey-text text-lighten-3">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright black darken-4">
            <div class="container center-align">&copy; 2018 Semester 5</div>
        </div>
    </footer>

<script>
$(document).ready(function(){
  		$('.modal').modal();
 });
</script>

  </body>
</html>
