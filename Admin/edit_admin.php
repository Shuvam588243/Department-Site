

<?php

session_start();


$_GET['id'];
$_GET['hn'];
$_GET['f'];
$_GET['g'];
$_GET['l'];
$_GET['n'];
$_GET['x'];
$_GET['z'];
$_GET['o'];

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>

<header>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="../index.php" target='_top'>Computer Science Dept</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="manage_admins.php" target='_top'><span class="iconify" data-icon="ic:baseline-arrow-back-ios-new" data-inline="false"></span>Back</a>
      </li>
    
    
 
  </div>
</nav>


</header>




<div class="container col-5 mt-4 mb-4">
<form name="f" method="post" >
  <fieldset>
    <legend>Update Sub Admins Roles</legend>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Admin ID</label>
      <input type="text"  name="t1" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo $_GET['id']; ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Admin Mail</label>
      <input type="text"  name="t2" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo $_GET['hn']; ?>">
      
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Create Admin</label>
      <input type="text"  name="t3" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo $_GET['f']; ?>">
      
    </div>
  
    <div class="form-group">
      <label for="exampleInputEmail1">Create Course</label>
      <input type="text"  name="t4" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo $_GET['g']; ?>">
      
    </div>

     <div class="form-group">
      <label for="exampleInputEmail1">Create Faculty</label>
      <input type="text"  name="t5" class="form-control" id="exampleEmail" aria-describedby="emailHelp" value="<?php echo $_GET['l']; ?>">
      
    </div>
	

	
	<div class="form-group">
      <label for="exampleInputEmail1">Manage Student</label>
      <input type="text" name="t6" class="form-control" id="exampleName" aria-describedby="emailHelp" value="<?php echo $_GET['n']; ?>">
      
    </div>
	
	
	
		
	<div class="form-group">
      <label for="exampleInputEmail1">Manage Course</label>
      <input type="text" name="t7" class="form-control" id="exampleName" aria-describedby="emailHelp" value="<?php echo $_GET['x']; ?>">
      
    </div>
	
	
	
	
		
	<div class="form-group">
      <label for="exampleInputEmail1">Manage Faculty</label>
      <input type="text" name="t8" class="form-control" id="exampleName" aria-describedby="emailHelp" value="<?php echo $_GET['z']; ?>">
      
    </div>


    <div class="form-group">
      <label for="exampleInputEmail1">Manage Exam</label>
      <input type="text" name="t9" class="form-control" id="exampleName" aria-describedby="emailHelp" value="<?php echo $_GET['o']; ?>">
      
    </div>
	
	
 
	
	
	
	</fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
  </fieldset>
	
</form>
</div>

<?php

if(isset($_POST["submit"]))

{

extract ($_POST);


include '../config/conn.php';


$id = $_GET['id'];


$sql = "UPDATE admin SET  createadmin ='$t3',createcourse ='$t4',createstudent ='$t5',createfaculty ='$t6',managestudent ='$t7',managecourse ='$t8',managefaculty ='$t8',manageexam ='$t9' WHERE aid = '$id'";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal(\"Success\", \"Admin Roles Updated Successfully\", \"success\")</script>";


  }
  else {
   
    echo "<script>swal(\"Error\", \"Updation Failed\", \"error\")</script>";
  
  
}


$conn->close();




}


?>


</body>
</html>