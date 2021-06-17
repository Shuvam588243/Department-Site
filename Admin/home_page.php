

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>

  <style>

    #c1{
      margin-top : 50px;
      margin-left : 320px;
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
        <a class="nav-link" href="index.php">Back
        </a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="exam_scheudule_search.php">Exam Schedule
        </a>
      </li>

    

     
    </ul>
  </div>
</nav>
  
 <div class="container mt-5">
   <div class="row">
    <div class="col-4">
      <form method="post">

                              


                                <div class="form-group">
                               <label for="t1">VISION</label>
                                <textarea class="form-control" id="t1" name="t1"></textarea>
                                </div>


                               





                              <button type="submit"  name="submit1" class="btn btn-primary">Add Update</button>
                                 

                                </form>


    </div>

    <div class="col" >
      <form method="post">

                              


                              

                                <div class="form-group">
                               <label for="t2">MISSION</label>
                                <textarea class="form-control" id="t2" name="t2"></textarea>
                                </div>






                              <button type="submit"  name="submit2" class="btn btn-primary">Add Update</button>
                                 

                                </form>


    </div>
    <div class="col">
      <form method="post">

                              


                               


                                <div class="form-group">
                               <label for="t3">BRIEF HISTORY OF DEPARTMENT</label>
                                <textarea class="form-control" id="t3" name="t3"></textarea>
                                </div>





                              <button type="submit"  name="submit3" class="btn btn-primary">Add Update</button>
                                 

                                </form>


    </div>
     
 </div>

</div>




<?php



if(isset($_POST["submit1"]))

{

include '../config/conn.php';

extract ($_POST);



if ($t1 != "")
{
  $sql = "update home_page set vision = '$t1'";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal(\"Success\", \"Vision Updated Successfully\", \"success\")</script>";
  }
  else {
   
    echo "<script>swal(\"Error\", \"Updation Failed\", \"error\")</script>";
  
  
}
}


$conn->close();

}


?>


<?php



if(isset($_POST["submit2"]))

{

include '../config/conn.php';

extract ($_POST);

if ($t2 != "")
{
  $sql = "Update home_page set mission = '$t2'";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal(\"Success\", \"Mission Updated Successfully\", \"success\")</script>";
  }
  else {
   
    echo "<script>swal(\"Error\", \"Updation Failed\", \"error\")</script>";
  
  
}
}


$conn->close();

}


?>

<?php



if(isset($_POST["submit3"]))

{

include '../config/conn.php';

extract ($_POST);

if ($t3 != "")
{
  $sql = "Update home_page set history = '$t3'";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal(\"Success\", \"History Updated Successfully\", \"success\")</script>";
  }
  else {
   
    echo "<script>swal(\"Error\", \"Updation Failed\", \"error\")</script>";
  
  
}
}


$conn->close();

}


?>









</body>
</html>
