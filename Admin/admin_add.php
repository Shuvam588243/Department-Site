
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
      </li>

      
      
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="manage_admins.php"><span class="iconify" data-icon="fe:eye" data-inline="false"></span>Manage Admins
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
                               <label for="t1">Admin Email</label>
                                <input type="email" class="form-control" id="t1" name="t1"aria-describedby="emailHelp" >
                                </div>

                                 <div class="form-group">
                               <label for="t2">Admin Password</label>
                                <input type="text" class="form-control" id="t2" name="t2"aria-describedby="emailHelp" >
                                </div>




                            
                              <legend>Set Roles</legend>

                              <div class="form-group">
                              <label for="r1">Create New Admin</label>
                              <select class="form-control"  name="r1" id="r1">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>


                            <div class="form-group">
                              <label for="r2">Create New Course</label>
                              <select class="form-control"  name="r2" id="r2">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>


                            <div class="form-group">
                              <label for="r3">Insert Student</label>
                              <select class="form-control"  name="r3" id="r3">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>



                             <div class="form-group">
                              <label for="r4">Insert Faculty</label>
                              <select class="form-control"  name="r4" id="r4">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                                     


                              <div class="form-group">
                              <label for="r5">Manage Student</label>
                              <select class="form-control"  name="r5" id="r5">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                                     



                              <div class="form-group">
                              <label for="r6">Manage Course</label>
                              <select class="form-control"  name="r6" id="r6">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>



                             <div class="form-group">
                              <label for="r7">Manage Faculty</label>
                              <select class="form-control"  name="r7" id="r7">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>


                            <div class="form-group">
                              <label for="r8">Manage Exam</label>
                              <select class="form-control"  name="r8" id="r8">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
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


$sql = "INSERT INTO admin(amail, apass, createadmin, createcourse, createstudent, createfaculty, managestudent, managecourse, managefaculty, manageexam)
VALUES ('$t1','$t2','$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8')";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal(\"Success\", \"Admin Added Successfully\", \"success\")</script>";
     
  }
  else {
   
    echo "<script>swal(\"Error\", \"Admin Addition Failed\", \"error\")</script>";
  
  
}

$conn->close();

}

?>








</body>
</html>
