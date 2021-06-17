
<?php
session_start();
$t1 = $_SESSION['amail'];
?>

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

     
    </ul>
  </div>
</nav>
  
 <div class="container">
   <div class="row">
     <div id = "c1" class="col-4">
       <form method="post">

                          


                                <div class="form-group">
                               <label for="t2"><span class="iconify" data-icon="carbon:password" data-inline="false"></span>Enter New Password</label>
                                <input type="password" class="form-control" id="t2" name="t2" >
                                </div>



                                <div class="form-group">
                               <label for="t3"><span class="iconify" data-icon="carbon:password" data-inline="false"></span>Confirm Password</label>
                                <input type="password" class="form-control" id="t3" name="t3" >
                                </div>


                                

                               

                                 <button type="submit" name="submit" class="btn btn-primary"><span class="iconify" data-icon="grommet-icons:update" data-inline="false"></span>Reset Password</button>
                               
                                 

                                </form>



                        </div>
     </div>
   </div>
 </div>


<?php

if(isset($_POST["submit"]))

{

extract ($_POST);


include '../config/conn.php';


if($t2 == $t3)
{

$sql = "UPDATE admin SET  apass ='$t2' WHERE amail = '$t1'";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal(\"Success\", \"Password Updated Successfully\", \"success\")</script>";
  }
  else {
   
    echo "<script>swal(\"Error\", \"Updation Failed\", \"error\")</script>";
  
  
}


$conn->close();

}

else

{
  echo "<script>swal(\"Warning\", \"Password Not Matched\", \"warning\")</script>";
}



}


?>



</body>
</html>
