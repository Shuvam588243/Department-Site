
<?php
session_start();
$t1 = $_SESSION['femail'];

$conn = mysqli_connect('localhost','root','','Web_Project');
$query="select * from faculties where femail='$t1'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
 

  $n1=$row["fqualification"];
 
  $n2=$row["fphone"];

  $n3=$row["faddress"];

  
}
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
      margin-top : 30px;
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
        <a class="nav-link" href="faculty_reset_pass.php"><span class="iconify" data-icon="eva:arrow-ios-back-fill" data-inline="false"></span>Reset Password
        </a>
      </li>

     
    </ul>
  </div>
</nav>
  
 <div class="container" >
   <div class="row">
     <div id = "c1" class="col-4">
       <form method="post"  enctype="multipart/form-data">

                              <div class="form-group">
                            <label for="exampleInputPassword1">Upload Photo</label>
                            <input type="file"  name="uploadfile" class="form-control" id="examplePassword" placeholder="">
                            </div>
  


                                <div class="form-group">
                               <label for="t3"><span class="iconify" data-icon="carbon:phone-filled" data-inline="false"></span>Phone Number</label>
                                <input type="text" class="form-control" id="t3" name="t3" value="<?php echo "$n2" ?>">
                                </div>

                                <div class="form-group">
                               <label for="t4"><span class="iconify" data-icon="carbon:phone-filled" data-inline="false"></span>Qualification</label>
                                <input type="text" class="form-control" id="t5" name="t5" value="<?php echo "$n1" ?>">
                                </div>


                                <div class="form-group">
                               <label for="t4"><span class="iconify" data-icon="el:address-book" data-inline="false"></span>Address</label>
                                <textarea class="form-control" id="t4" name="t4" > <?php echo "$n3" ?></textarea>
                                </div>


                               

                                 <button type="submit" name="submit" class="btn btn-primary"><span class="iconify" data-icon="grommet-icons:update" data-inline="false"></span>Update</button>
                               
                                 

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


$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "Photo/".$filename;

move_uploaded_file($tempname,$folder);
$folder = "http://localhost/Website Projects/Dept Site 2.0/Faculties/Photo/".$filename;


if($t3!="" && $t4!=""&& $t5!="")
{

$sql = "UPDATE faculties SET  fimage ='$folder',fqualification ='$t5',fphone ='$t3',faddress ='$t4' WHERE femail = '$t1'";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal(\"Success\", \"Information Updated Successfully\", \"success\")</script>";
  }
  else {
   
    echo "<script>swal(\"Error\", \"Updation Failed\", \"error\")</script>";
  
  
}


$conn->close();

}

else

{
  echo "<script>swal(\"Error\", \"Field Cant be Empty\", \"error\")</script>";
}



}


?>



</body>
</html>
