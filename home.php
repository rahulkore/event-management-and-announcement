
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>V-Events | HOME </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
    </script>

    <script type="text/javascript">

      function validate()
      {
        if(reg.stu_name.value=="")
        {
          alert("Please enter the name");
          return false;
        }
        if(reg.roll_no.value=="")
        {
          alert("Please enter the Roll Number");
          return false;
        }
        if(reg.year.value=="")
        {
          alert("Please enter the year");
          return false;
        }
        if(reg.branch.value=="")
        {
          alert("Please enter the branch");
          return false;
        }
        if(reg.division.value=="")
        {
          alert("Please enter the Division");
          return false;
        }
        if(reg.phone_no.value=="")
        {
          alert("Please enter the phone number");
          return false;
        }
        if(reg.email_id.value=="")
        {
          alert("Please enter the email address");
          return false;
        }
        if(reg.eventby.value=="")
        {
          alert("Please enter the committees name");
          return false;
        }
        if(reg.event_name.value=="")
        {
          alert("Please enter the name of event you want to attend");
          return false;
        }


        return true;
      }
  </script>




    <style>
        header{
            background:url(audi2.jpg);
            background-size:cover;
            background-position:center;
            min-height: 900px;
        }
        .section{
            padding-top: 4vw;
            padding-bottom: 4vw;
        }
        .material-icons.md-24{font-size: 48px;}
        .modal{ max-height: 90% !important ;width: 45% !important ;}
        .close {
		position: absolute;
		right: 25px;
		top: 0;
		color: #000;
		font-size: 35px;
		font-weight: bold;
	}

	    .close:hover,
	    .close:focus {
		color: red;
		cursor: pointer;
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
<body>
    <header>
    <nav class="nav-wraper transparent">
        <div class="container">
            <a href="#" class="brand-logo">V-Events</a>
            <a href="#" class="sidenav" ><i class="material-icons white-text">menu</i></a>
            <ul class="right">
                <li><a href="#">Home</a></li>
                <li><a href="http://vit.edu.in/">VIT</a></li>
                <li><a href="http://vidyalankarlive.com/moodle/login/index.php">VLIVE-2</a></li>
                <li><a href="#id01"  class="modal-trigger" >LOGIN</a></li>
                <li><a href="#notify"  class="btn-floating white z-dept-0 pulse"><i class="material-icons black-text">notifications</i></a></li>
             </ul>
             <div class="modal" id="id01">
                <form class="modal-content animate" action="login.php" method="post">
                    <div class="imgcontainer">

                        <a href="index.php"><span onclick="document.getElementById('id01')" class="close" title="Close Login Window">&times;</span></a>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img src="avatar.png" alt="Avatar" class="avatar" height="50%" width="50%" style="border-radius: 50%">
                                    </div>
                                    <div class="col">
                                        <h2 style=" color: black" >ADMIN</h2>
                                    </div>
                                </div>
                            </div>
                    </div>
                            <div class="container">
                                <label for="uname"><b>Username</b></label>
                                 <input type="text" placeholder="Enter Username" name="uname" id="myName" required>

                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw"  id="myInput" required>
                                    <p>
                                            <label>
                                              <input type="checkbox" onclick="myFunction()"/>
                                              <span>Show Password</span>
                                            </label>
                                    </p>
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn green waves-effect waves-light" type="submit" name="action" onclick="authorize()" ><span> Login </span></button>
                                        </div>
                                        <div class="col">
                                                <button class="btn red waves-effect waves-light" type="submit" name="action" onclick="document.getElementById('id01').style.display='none'" ><span> Cancel </span></button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
        </div>
    </nav>
    </header>
    <section class="container section" id="photo">
        <div class="row">
            <div class="col s12 l4"><img src="csi (2).jpg" alt="" class="responsive-img materialboxed"> </div>
            <div class="col s12 l6 offset-l1">
                <h3 class="black-text">Computer Society of India-CSI</h3>
                <p>The Computer Society of India is a non-Profit professional meet to exchange views and information learn and share ideas. The wide spectrum of members is committed
                     to the advancement of the theory and practice of Computer Engineering and Technology Systems, Science and Engineering, Information Processing and related Arts and Sciences.
                     The Society also encourages and assists professionals to maintain the integrity and competence of the profession and fosters a sense of partnership amongst members. Besides
                      the activities held at the Chapters and Student Branches, the Society also conducts periodic conferences, seminars, etc.</p>
            </div>
        </div>
        <div class="row">
                <div class="col s12 l4 push-l7"><img src="Asset 3.png" alt="" class="responsive-img materialboxed"></div>
                <div class="col s12 l6 pull-l5 right-align offset-l1 ">
                    <h3 class="black-text">Computer Engineering Student Assoication-CESA</h3>
                    <p>The Computer Engineering Students’ Association (CESA) is a collaboration of all the Computer engineering students of the college. It unites all the
                         students to participate and contribute towards the activities organised by the first and second year students of the Computers engineering field.
                     CESA aims at developing the usual tasks involving computer engineers which include writing software and firmware for embedded microcontrollers, designing VLSI chips,
                      designing analog sensors, designing mixed signal circuit boards, and designing operating systems. They are also suited for robotics research, which relies heavily on using digital systems to control and monitor electrical systems like motors, communications, and sensors.</p>
                </div>
         </div>
          <div class="row">
                    <div class="col s12 l4"><img src="ieee.png" alt="" class="responsive-img materialboxed"> </div>
                    <div class="col s12 l6 offset-l1">
                        <h3 class="black-text">Institute of Electronics & Electrical Engineers-IEEE</h3>
                        <p>In this information age, where innovation has become a necessity, IEEE provides a platform to innovate for a better tomorrow.
                            Comprising of more than 423,000 members in over 160 countries, along with highly cited publications, conferences, and technology standards,
                             as well as professional and educational activities, IEEE inspires to pioneer in engineering, computing and technology information around the globe.</p>
                    </div>
        </div>

    </section>
    <div class="parallax-container">
        <div class="parallax">
            <img src="tedx2.jpg" alt="" class="responsive-img" >
        </div>
    </div>

    <section class=" container scetion scrollspy"  id="notify">
        <div class="container">
        <p><b>Current Registration opened for</b></p>

        <?php
            include "connect.php";
            $query = "select * from events order by e_date asc limit 3 ";
            $result = mysqli_query($con,$query);

            while($row = mysqli_fetch_assoc($result))
            {
              echo "<table>
              <tr>";
              echo  " <td>".$row['title']. "  by  ".strtoupper($row['event_by'])."</td>";
              echo "  <td> <a href='#register' class='btn btn-large teal modal-trigger'><span>Register Now </span><i class='material-icons left'>send</i></a></td>
                </tr>";


            echo "</table>";
          }
            ?>
    </div>
    </section>


        <div id="register" class="modal ">
          <h5 class="modal-close">&#10005;</h5>
          <div class="modal-content center">
            <h4><strong>REGISTRATION FORM</strong></h4>
            <br>

            <form name="reg" class="modal-content animate" method="post" onsubmit="return validate()" action="register.php" >

              <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input type="text" name="stu_name">
                <label for="stu_name">Enter Name</label>
              </div>
              <br>

              <div class="input-field">
                <i class="material-icons prefix">school</i>
                <input type="text" name="roll_no">
                <label for="roll_no">Enter Roll Number</label>
              </div>
              <br>

              <div class="input-field">
                <i class="material-icons prefix">school</i>
                <input type="text" name="year">
                <label for="year">Enter year</label>
              </div>
              <br>

              <div class="input-field">
                <i class="material-icons prefix">school</i>
                <input type="text" name="branch">
                <label for="branch">Enter branch</label>
              </div>
              <br>

              <div class="input-field">
                <i class="material-icons prefix">school</i>
                <input type="text" name="division">
                <label for="division">Enter Division</label>
              </div>
              <br>

              <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input type="text" name="phone_no" pattern="[0-9]{10}" required>
                <label for="phone_no">Enter Phone Number</label>
              </div>
              <br>

              <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input type="text" name="email_id">
                <label for="email_id">Enter Email-id</label>
              </div>
              <br>

              <div class="input-field">
                <i class="material-icons prefix">home</i>
                <input type="text" name="eventby">
                <label for="eventby">Enter committees name</label>
              </div>
              <br>

                          <div class="input-field">
                              <i class="material-icons prefix">event</i>
                              <input type="text" name="event_name">
                              <label for="event_name">Enter Evenet name</label>
                            </div>
                            <br>


              <input type="submit" value="REGISTER" class="btn btn-large">

            </form>
          </div>
        </div>





    <div class="parallax-container">
            <div class="parallax">
                <img src="event1.jpg" alt="" class="responsive-img" >
            </div>
    </div>
    <section class=" container scetion scrollspy">
    <div class="container">
            <p><b>Upcoming events </b></p>
            <?php
                include "connect.php";
                $query = "select * from events order by e_date desc limit 3 ";
                $result = mysqli_query($con,$query);

                while($row = mysqli_fetch_assoc($result))
                {
                  echo "<table>
                  <tr>";
                  echo  " <td>".$row['title']. "  by  ".strtoupper($row['event_by'])."</td>";
                  echo "  <td> <a href='#register' class='btn btn-large teal modal-trigger disabled'><span>Register Now </span><i class='material-icons left'>send</i></a></td>
                    </tr>";


                echo "</table>";
              }
                ?>    </div>
    </section>
    <footer class="page-footer grey darken-3">
        <div class="container">
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
        <div class="footer-copyright grey darken-4">
            <div class="container center-align">&copy; 2018 Semester 5</div>
        </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        {

                        $('.materialboxed').materialbox();
                        $('.parallax').parallax();
                        $(document).ready(function(){

                            $('.modal').modal();
                        })

                        function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                        function authorize()
                        {
                            if(document.getElementById("myName").value=='' || document.getElementById("myInput").value=='')
                            alert("Please enter  credentials!");

                        }
                        var modal = document.getElementById('id01');


                	        window.onclick = function(event) {
		                    if (event.target == modal) {
			                modal.style.display = "none"};
	    	}
        }
    </script>
</body>
</html>
