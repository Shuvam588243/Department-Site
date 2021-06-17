

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
      margin-top : 60px;
      margin-left : 320px;
    }
    #b1{
      margin-top: 3px;
      margin-left: 6px;
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
        <a class="nav-link" href="view_faculties.php"><span class="iconify" data-icon="fe:arrow-left" data-inline="false"></span>View Faculty
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="faculty_show.php"><span class="iconify" data-icon="fe:arrow-left" data-inline="false"></span>Allocate Faculty
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
                               <label for="n1">Faculty Name</label>
                                <input type="text" class="form-control" id="n1" name="n1"aria-describedby="emailHelp" >
                                </div>

                                 <div class="form-group">
                                  <label for="n6">Faculty Designation</label>
                                <select class="form-control"  name="n6" id="n6">
                                  <option value="Professor">Professor</option>
                                  <option value="Assistant Professor">Assistant Professor</option>
                                  <option value="Associate Faculty">Associate Faculty</option>
                                  <option value="Associate Professor">Associate Professor</option>
                                </select>
                              </div>




                                <div class="form-group">
                               <label for="n2">Faculty Email</label>
                                <input type="email" class="form-control" id="n2" name="n2" aria-describedby="emailHelp" >
                                </div>


                                <div class="form-group">
                               <label for="n3">Faculty Number</label>
                                <input type="text" class="form-control" id="n3" name="n3"aria-describedby="emailHelp" >
                                </div>


                                <div class="form-group">
                               <label for="n4">Faculty Qualification</label>
                                <input type="text" class="form-control" id="n4" name="n4" aria-describedby="emailHelp" >
                                </div>


                            

                                <div class="form-group">
                               <label for="exampleInputEmail1">Faculty Password</label>
                                <input type="text" class="form-control" id="n5" name="n5"aria-describedby="emailHelp" >
                                </div>





                                <button type="submit" name="submit" class="btn btn-primary">Add Faculty</button>
                               
                               
                                 

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



$sql = "INSERT INTO Faculties(fname,fqualification,fphone,femail,fpass,fdesig)
VALUES ('$n1','$n4','$n3','$n2','$n5','$n6')";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal('Success', 'Faculty Inserted Successfully', 'success')</script>";
  }
  else {
   
    echo "<script>swal('Error', 'Dhett Terika', 'error')</script>";
  
  
}

$conn->close();

}


?>




</body>
</html>
