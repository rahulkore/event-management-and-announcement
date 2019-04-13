<?php
function fetch_data1()
{


     $output = '';
     $conn = mysqli_connect("localhost", "root", "", "event_announcement");
     $sql = "select * from dummy";
     $result = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_array($result))
     {
     $output .= '<tr>

                         <td>'.$row["stu_name"].'</td>
                         <td>'.$row["roll_no"].'</td>
                         <td>'.$row["year"].'</td>
                         <td>'.$row["branch"].'</td>
                         <td>'.$row["division"].'</td>
                         <td>'.$row["phone_no"].'</td>
                         <td>'.$row["email_id"].'</td>
                    </tr>
                         ';
     }
     return $output;
}
 function fetch_data()
 {
   include "connect.php";
   $event_name = $_POST['event'];
   $query = "select * from events where title='$event_name'";
   $result = mysqli_query($con,$query);
   $row = mysqli_fetch_assoc($result);
   $event_id = $row['event_id'];
      $output = '';
      $conn = mysqli_connect("localhost", "root", "", "event_announcement");
      $sql = "select * from students where stu_id in(select stu_id from event_attendies where event_id='$event_id')";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result))
      {

      $output .= '<tr>

                          <td>'.$row["stu_name"].'</td>
                          <td>'.$row["roll_no"].'</td>
                          <td>'.$row["year"].'</td>
                          <td>'.$row["branch"].'</td>
                          <td>'.$row["division"].'</td>
                          <td>'.$row["phone_no"].'</td>
                          <td>'.$row["email_id"].'</td>
                     </tr>
                          ';

                          $stu_name  = $row["stu_name"];
                          $roll_no = $row["roll_no"];
                          $year = $row["year"];
                          $branch = $row["branch"];
                          $division = $row["division"];
                          $phone_no = $row["phone_no"];
                          $email_id = $row["email_id"];

      $sql = "insert into dummy(stu_name,roll_no,year,branch,division,phone_no,email_id)
      values('$stu_name','$roll_no','$year','$branch','$division','$phone_no','$email_id')";
      mysqli_query($conn,$sql);
      }
      return $output;
}
 if(isset($_POST["generate_pdf"]))
 {
      require_once('tcpdf/tcpdf.php');
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
      $obj_pdf->SetCreator(PDF_CREATOR);
      $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
      $obj_pdf->SetDefaultMonospacedFont('helvetica');
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
      $obj_pdf->setPrintHeader(false);
      $obj_pdf->setPrintFooter(false);
      $obj_pdf->SetAutoPageBreak(TRUE, 10);
      $obj_pdf->SetFont('helvetica', '', 11);
      $obj_pdf->AddPage();
      $content = '';
      $content .= '
      <h4 align="center">Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</h4><br />
      <table border="1" cellspacing="0" cellpadding="3">
      <tr>

           <th width="20%">Student name</th>
           <th width="15%">Roll Number</th>
           <th width="5%">year</th>
           <th width="10%">branch</th>
           <th width="5%">division</th>
           <th width="20%">Phone Number</th>
           <th width="20%">Email id</th>
      </tr>      ';
      $content .= fetch_data1();
      $content .= '</table>';
      $obj_pdf->writeHTML($content);
      $obj_pdf->Output('file.pdf', 'I');
 }
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>SoftAOX | Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      </head>
      <body>
           <br />
           <div class="container">
                <h4 align="center"> Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</h4><br />
                <div class="table-responsive">
                	<div class="col-md-12" align="right">
                     <form method="post">
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />
                     </form>
                     </div>
                     <br/>
                     <br/>
                     <table class="table table-bordered">
                       <tr>

                            <th width="30%">Student name</th>
                            <th width="15%">Roll Number</th>
                            <th width="50%">year</th>
                            <th width="50%">branch</th>
                            <th width="50%">division</th>
                            <th width="50%">Phone Number</th>
                            <th width="50%">Email id</th>
                       </tr>
                     <?php
                     echo fetch_data();
                     ?>
                     </table>
                </div>
           </div>
      </body>
</html>
