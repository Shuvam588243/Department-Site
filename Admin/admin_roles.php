<?php

$conn = mysqli_connect('localhost','root','','Web_Project');
$query="select * from Faculties where femail='sss@gmail.com'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
  $t1=$row["aid"];
  $t2=$row["amail"];
  $t3=$row["createadmin"];
  $t4=$row["createcourse"];
  $t5=$row["createstudent"];
  $t6=$row["createfaculty"];
  $t7=$row["managestudent"];
  $t8=$row["managecourse"];
  $t9=$row["managefaculty"];
  $t10=$row["manageexam"];
  
}





?>