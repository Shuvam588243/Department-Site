


<?php

session_start();


$t1 = $_SESSION['amail'];

$conn = mysqli_connect('localhost','root','','Web_Project');
$query="select * from admin where amail='$t1'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
  $t2=$row["aid"];
  $t3=$row["amail"];


}

include("header.php");




?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>

</head>
<body>
  <br><br>

<div class="container">


<div class="row">

  <div class="col-4">

 <div class="card mb-3 " style="max-width: 30rem;">
   <div>
                    <div class="card-header" align="center"><font size="4"><b>My Profile</b></font></div>
                        <div class="card-body">
                          <center> <img  style="height: 150px; width: 60%; display: block;" src="male_default.jpg" alt="Card image"></center>

                         
                          <hr>

                            <form>

                             



                                <div class="form-group">
                               <label for="exampleInputEmail1"><span class="iconify" data-icon="ic:sharp-account-circle" data-inline="false"></span>Admin ID</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo "$t2" ?>">
                                </div>



                                <div class="form-group">
                               <label for="exampleInputEmail1"><span class="iconify" data-icon="ic:round-email" data-inline="false" style="margin-left: 3px"></span>Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo "$t3" ?>">
                                </div>





                      
                               
                                 

                                </form>



                        </div>
                      </div>




    </div>


                     
              















</div>






<div class="col-8">

  <div class="jumbotron">
  <h1 class="display-3">Update My Profile</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="admin_reset_pass.php" role="button" target="top"><span class="iconify" data-icon="radix-icons:update" data-inline="false" style="margin-left: 3px"></span>Update Here</a>
  </p>
</div>



</div>
















</div>
</div>


<br><br><br><br><br><br>
</body>
</html>
