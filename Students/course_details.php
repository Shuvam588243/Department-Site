
<?php

session_start();
$t1 = $_SESSION['smail'];

$servername = "localhost";
$username = "root";
$password = "";
$myDB = "Web_Project";

extract ($_POST);

$conn = mysqli_connect($servername,$username,$password,$myDB);

if(!$conn)
{
  die("Connection Failed :" . mysqli_connect_error());
}



$query = "SELECT * FROM students where smail='$t1'";
$data = mysqli_query($conn, $query);
$total= mysqli_num_rows($data);

if($total !=0)
{
  ?>
  <html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  
  </head>
  <center>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-top: 0px !important;">
  <a class="navbar-brand" href="#">Computer Science Dept</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="student_index.php"><span class="iconify" data-icon="ic:baseline-arrow-back-ios-new" data-inline="false"></span>Back
        </a>
      </li>
      </li>

     
    </ul>
  </div>
</nav>
  
  
<br> 
<br> 
<br> 
<div class="container" style="margin-left: 86px">
<div class="col-12"> 
 <table border=1  class="table table-hover">
 <tr class="table-primary">
 <th>Student ID</th>
 <th>Student Name</th>
 <th>Course ID</th>
  <th>Subject 1</th>
 <th>Subject 2</th>
  <th>Subject 3</th>
 <th>Subject 4</th>
  <th>Subject 5</th>



 
 
 
 </tr>


  
  
  
  
  
  <?php
  
  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr id=".$result['sid'].">
 <td align='center'>".$result['sid']."</td>
 <td align='center' data-target='code'>".$result['sname']."</td>
 <td align='center' data-target='s_name'>".$result['cid']."</td>
 <td align='center' data-target='ctotsem'>".$result['sub1']."</td>
 <td align='center' data-target='sem'>".$result['sub2']."</td>
 <td align='center' data-target='fid'>".$result['sub3']."</td>
 <td align='center' data-target='fid'>".$result['sub4']."</td>
 <td align='center' data-target='fid'>".$result['sub5']."</td>
 
 






 
 
 
 </tr>";
 }
}
else
{
  echo "no record found";
}

  
?>
</table> 
 </div> 
 </div>


<div class="modal" id="myModal" style="max-width: 400px; margin-left : 440px">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 id="ha",class="modal-title bg-primary text-white">Course Update</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
  <fieldset>

   
      


     <div class="form-group">
        <label for="t1">Subject Code </label>
        <input type="email" class="form-control" id="t1" name="t1">

        <label for="t2">Subject Name</label>
        <input type="email" class="form-control" id="t2" name="t2">


        <label for="t2">Subject Type</label>
        <input type="email" class="form-control" id="t2" name="t2">

     

     

         <label for="t4">Semester </label>
        <input type="text" class="form-control" id="t4" name="t4">

         <label for="t5">Alloted Faculty </label>
        <input type="text" class="form-control" id="t5" name="t5">

        <label for="t6">Exam Date </label>
        <input type="date" class="form-control" id="t6" name="t6">



         <input type="hidden" class="form-control" id="id" name="id">


        </div>


    

    </fieldset>
    <center>
    <a href="#" id="save" class="btn btn-primary pull-right">Schedule</a>


  
</center>
  </fieldset>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       
      </div>

    </div>
  </div>
</div>




</body>
</center>
</html>