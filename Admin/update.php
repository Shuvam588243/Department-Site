<?php

include "../config/conn.php";

if(isset($_POST['id'])){
    $email=$_POST['email'];
    $designation=$_POST['designation'];
    $id=$_POST['id'];

    $query = mysqli_query($conn,"UPDATE faculties SET femail='$email', fdesig='$designation' WHERE fid=$id");
    
    if($query){
        return 'updated';
    }
}

?>