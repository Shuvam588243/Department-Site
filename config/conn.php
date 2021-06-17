<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB = "Web_Project";

extract ($_POST);

$conn = mysqli_connect($servername,$username,$password,$myDB);

if(!$conn)
{
  die("Connection Failed :" . mysqli_connect_error());
}
?>