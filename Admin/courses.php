

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>

  <style>

    #c1{
      margin-top : 30px;
      margin-left : 320px;
    }
     ul a:hover{
      background-color: black;
      color: white;
      padding: auto;
      height: 38px;
    }
    #b1{
      margin-top : 3px;
      margin-left: 8px;
    }
    .iconify{
      margin-right: 4px;
      margin-left : 4px;
    }
   



  </style>





</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Computer Science Dept</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><span class="iconify" data-icon="fe:arrow-left" data-inline="false"></span>Back
        </a>
      </li>
     

      
      
   
       <li class="nav-item active">
        <a class="nav-link" href="view_courses.php"><span class="iconify" data-icon="fe:eye" data-inline="false"></span>View Courses
        </a>
      </li>


        <li class="nav-item active">
        <a class="nav-link" href="add_subject.php"><span class="iconify" data-icon="fe:eye" data-inline="false"></span>Add Subject
        </a>
      </li>

     
    </ul>
  </div>
</nav>
  
 <div class="container">
   <div class="row">
     <div id = "c1" class="col-4">
       <form method="post">

                               <div class="form-group">
                               <label for="t1">Course Name</label>
                                <input type="text" class="form-control" id="t1" name="t1"aria-describedby="emailHelp" >
                                </div>

                                 <div class="form-group">
                               <label for="t7">Course Short Name</label>
                                <input type="text" class="form-control" id="t7" name="t7"aria-describedby="emailHelp" >
                                </div>




                                <div class="form-group">
                               <label for="t2">Total Semester</label>
                                <input type="text" class="form-control" id="t2" name="t2" aria-describedby="emailHelp" >
                                </div>


                                <div class="form-group">
                               <label for="t3">Course Total Years</label>
                                <input type="text" class="form-control" id="t3" name="t3" aria-describedby="emailHelp" >
                                </div>

                                <div class="form-group">
                               <label for="t4">Course Total Seat Capacity</label>
                                <input type="text" class="form-control" id="t4" name="t4" aria-describedby="emailHelp" >
                                </div>


                                <div class="form-group">
                               <label for="t5">Course Total Fees</label>
                                <input type="text" class="form-control" id="t5" name="t5" aria-describedby="emailHelp" >
                                </div>

                                <div class="form-group">
                               <label for="t6">Fees Per Semester</label>
                                <input type="text" class="form-control" id="t6" name="t6" aria-describedby="emailHelp" >
                                </div>





                               <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                               
                               
                                 

                                </form>



                        </div>
     </div>
   </div>
 </div>

<?php



if(isset($_POST["submit"]))

{

include '../config/conn.php';

extract ($_POST);


$sql = "INSERT INTO Course(cname,ctotsem,ctotyear,ctotcapacity,ctotfees,csemfees,cshort)
VALUES ('$t1','$t2','$t3','$t4','$t5','$t6','$t7')";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal(\"Success\", \"Course Added Successfully\", \"success\")</script>";
  }
  else {
   
    echo "<script>swal(\"Error\", \"Course Not Inserted\", \"error\")</script>";
  
  
}

$conn->close();

}


?>








</body>
</html>
