


<?php

session_start();

?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>





<?php

include '../config/conn.php';


$id = $_GET['id'];




$sql = "Delete from subject where code='$id'";

if ($conn->query($sql) === TRUE) {
  
  	 
     echo "<script>swal(\"Success\", \"Subject Deleted Successfully\", \"success\")</script>";
     header('Location:view_subjects.php');
   
     

  }



  else {
   
    echo "<script>swal(\"Error\", \"Deletion Failed\", \"error\")</script>";
  
  
}


$conn->close();






?>


</body>
</html>