<?php

include "../config/conn.php";

if(isset($_POST['id'])){
    $cname=$_POST['cname'];
    $cshort=$_POST['cshort'];
    $ctotsem=$_POST['ctotsem'];
    $ctotcapacity=$_POST['ctotcapacity'];
    $ctotfees=$_POST['ctotfees'];
    $csemfees=$_POST['csemfees'];
    $id=$_POST['id'];

    $query = mysqli_query($conn,"UPDATE courses SET cname='$cname', cshort='$cshort' , ctotsem='$ctotsem', ctotcapacity='$ctotcapacity' , ctotfees='$ctotfees', csemfees='$csemfees' WHERE cid=$id");
    
    if($query){
        return 'updated';
    }
}


?>