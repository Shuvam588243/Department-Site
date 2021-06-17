

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

echo $id;


$sql = "Delete from course where cid='$id'";

if ($conn->query($sql) === TRUE) {
  
  	 header('Location:view_courses.php');
     echo "<script>swal(\"Success\", \"Course Deleted Successfully\", \"success\")</script>";
   
     

  }



  else {
   
    echo "<script>swal(\"Error\", \"Deletion Failed\", \"error\")</script>";
  
  
}


$conn->close();






?>


</body>
</html>