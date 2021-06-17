
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title></title>
  <style>
  ul li a:hover{
      background-color: black;
      color: white;
    }
     .iconify{
      margin-right: 4px;
      margin-left : 4px;
    }
    #c1{
      margin-left: 510px;
    }
    </style>
  
</head>
  <img src="images/GU.png" alt="">


  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Computer Science Dept</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto"> 
      <li class="nav-item active">
        <a class="nav-link" href="../"><span class="iconify" data-icon="ant-design:home-filled" data-inline="false"></span>Home
        </a>
      </li>
    </ul>
  </div>
</nav>

<br><br>
  



 <div class="container" id="c1">
   

        <div class="row">
            
            <br>

           


            <div class="col"> 

              <div  style="max-width: 20rem;">
                     <div class="card-header bg-primary text-white" align="center"><b><font size=4>ADMIN LOGIN</font></b></div>
                     <div class="card-body">
                      




<form method="post">
  <fieldset>
    <legend>Login Here</legend>
   
    <div class="form-group">
      <label for="t1">Email address</label>
      <input type="email" class="form-control" id="t1" aria-describedby="emailHelp" name="t1">
    </div>
    <div class="form-group">
      <label for="t2">Password</label>
      <input type="password" class="form-control" id="t1" name="t2">
    </div>
    </fieldset>
    <center>
    <button type="submit" name="submit" class="btn btn-primary">Login</button>
  
</center>
  </fieldset>
</form>








<?php

if(isset($_POST["submit"]))

{

extract ($_POST);



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Web_Project";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
  die("Database Connection Failed");
}

$query="Select * from admin where amail='$t1' and apass='$t2'";

$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
if($count==1)
{

         $_SESSION['amail']= $t1;
         header('Location:index.php');
}
else
{


   echo "<script>swal(\"Error\", \"Invalid Credentials\", \"error\")</script>";
}

$conn->close();

}


?>



















              </div>
            </div>
          </div>
</div>



</div>

</body>
</html>