<?php

include '../config/conn.php';

if (isset($_POST['sem']) and isset($_POST['cid']))  
{
	$sem = $_POST['sem'];
  $cid = $_POST['cid'];
	$sql = "select  s_name , code from subject where sem='$sem' and cid='$cid' order by s_name asc";

	$query = $conn->query($sql);

	if($query) {
  
  	 
     echo "<option value=''>Select Subject</option>";
     while ($row = mysqli_fetch_assoc($query))
     {
     	echo "<option value=".$row['code'].">".$row['s_name']."</option>";

     }

   
     

  }



  



}


$conn->close();






?>
