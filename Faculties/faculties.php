
<?php

session_start();

$ts = $_SESSION['femail'];

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>

  <style>

    #c1{
      margin-top : 60px;
      margin-left : 320px;
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
        <a class="nav-link" href="index.php"><span class="iconify" data-icon="eva:arrow-ios-back-fill" data-inline="false"></span>Back
        </a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="#"><span class="iconify" data-icon="carbon:view-filled" data-inline="false"></span>View Assignment
        </a>
      </li>

    

     
    </ul>
  </div>
</nav>
  
 <div class="container">
   <div class="row">
     <div id = "c1" class="col-4">
       <form>

                               <div class="form-group">
                               <label for="t1"><span class="iconify" data-icon="bx:bx-book" data-inline="false"></span>Course ID</label>
                                <input type="email" class="form-control" id="t1" name="t1" aria-describedby="emailHelp" >
                                </div>




                                <div class="form-group">
                               <label for="t2"><span class="iconify" data-icon="bx:bx-book" data-inline="false"></span>Assignment Title</label>
                                <input type="email" class="form-control" id="t2" name="t2" aria-describedby="emailHelp" >
                                </div>

                                <div class="form-group">
                              <label for="t5">Enter  Semester</label>
                            <select class="form-control"  name="t5" id="t5">
                               <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                             </select>
                               </div>


                                <div class="form-group">
                               <label for="t3"><span class="iconify" data-icon="bx:bx-book" data-inline="false"></span>Assignment Description</label>
                                <textarea type="email" class="form-control" id="t3" name="t3" aria-describedby="emailHelp" ></textarea>
                                </div>



                                <div class="form-group">
                               <label for="t4"><span class="iconify" data-icon="bx:bx-book" data-inline="false"></span>Assignment Marks</label>
                                <input type="email" class="form-control" id="t4" name="t4" aria-describedby="emailHelp" >
                                </div>


                                 <div class="form-group">
                              <label for="exampleInputPassword1"><span class="iconify" data-icon="bx:bxs-cloud-upload" data-inline="false"></span>Upload Assignment</label>
                              <input type="file"  name="uploadfile" class="form-control" id="examplePassword" placeholder="">
                              </div>
                               





                               <a class="btn btn-primary" href="student_update.php" role="button" target="top"><span class="iconify" data-icon="ant-design:file-add-filled" data-inline="false"></span>ADD Assignment</a>
                               
                                 

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


$query1="select * from Faculties where femail='$t1'";
$result1=mysqli_query($conn,$query1);
while($row = mysqli_fetch_array($result1))
{
  $id=$row["fid"];
}
$query2="select * from subject where fid='$id'";
$result2=mysqli_query($conn,$query2);
while($row = mysqli_fetch_array($result2))
{
  $sem=$row["sub"];
  $cid=$row["cid"];
}

 
if ($t5 != sem)
{
  echo "<script>swal(\"Success\", \"You C\", \"success\")</script>";
}




$sql = "INSERT INTO assignment(adesc,atopic,amarks,cid,sem)
VALUES ('$t3','$t2','$t4','$t1','$t5')";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal(\"Success\", \"Assignment Added Successfully\", \"success\")</script>";
  }
  else {
   
    echo "<script>swal(\"Error\", \"Addition Failed\", \"error\")</script>";
  
  
}

$conn->close();

}


?>






</body>
</html>
