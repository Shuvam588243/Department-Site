<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <title></title>
  
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
        <a class="nav-link" href="../">Home
        </a>
      </li>
    </ul>
  </div>
</nav>

<br><br>
  
<?php session_start(); ?>


 <div class="container">
   

        <div class="row">
            
            
 
          </div>

            <br>

            <div class="col"> 

              <div class="card border-info" style="max-width: 20rem;">
                     <div class="card-header" align="center"><b><font size=4>FACULTY LOGIN</font></b></div>
                     <div class="card-body">
                      




<form method="post">
  <fieldset>
    <legend>Login Here</legend>
   
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="t1">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="t2">
    </div>
    </fieldset>
    <center>
    <button type="submit" name="submit" class="btn btn-primary">Login</button>
  
  <button type="submit" name="submit2" class="btn btn-primary">Forget Password</button>
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
$dbname = "regportal";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
  die("Database Connection Failed");
}

$query="Select * from registration where Smail='$t1' and Spass='$t2'";

$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
if($count==1)
{

         $_SESSION['Smail']= $t1;
         header('Location:index.php');
}
else
{


    echo "<script>alert('Invalid Details')</script>";
}

$conn->close();

}


?>




<?php

if(isset($_POST["submit2"]))

{

header("Location:forgot_password.php");

}


?>














              </div>
            </div>
          </div>
</div>



</div>

</body>
</html>