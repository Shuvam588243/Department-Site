<?php

include "../config/conn.php";

if(isset($_POST['id'])){
   
    $id=$_POST['id'];

    $query = mysqli_query($conn,"DELETE from faculties WHERE fid=$id");
    
    if($query){
        return 'deleted';
    }
}

?>