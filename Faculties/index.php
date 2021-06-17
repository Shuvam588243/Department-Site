
<?php include("header.php")?>

<?php

session_start();

$t1 = $_SESSION['femail'];

$conn = mysqli_connect('localhost','root','','Web_Project');
$query="select * from Faculties where femail='$t1'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
  $t1=$row["fid"];
  $t2=$row["fname"];
  $t3=$row["fqualification"];
  $t4=$row["fphone"];
  $t5=$row["femail"];
  $t6=$row["fimage"];
  
}


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
                          <center>
                            
                            <img src="<?php echo $t6; ?>" alt="" width="200" height="200" class="img-responsive" />



                          </center>

                         
                          <hr>

                            <form>

                               <div class="form-group">
                               <label for="exampleInputEmail1">ID</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo "$t1" ?>" >
                                </div>

                               <div class="form-group">
                               <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo "$t5" ?>" >
                                </div>



                                <div class="form-group">
                               <label for="exampleInputEmail1">Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo "$t2" ?>">
                                </div>





                                <div class="form-group">
                               <label for="exampleInputEmail1">Phone Number</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo "$t4" ?>">
                                </div>





                                <div class="form-group">
                               <label for="exampleInputEmail1">Qualification</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo "$t3" ?>">
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
    <a class="btn btn-primary btn-lg" href="Faculty_update.php" role="button" target="top">Update Here</a>
  </p>
</div>



</div>
















</div>
</div>


<br><br><br><br><br><br>
</body>
</html>
