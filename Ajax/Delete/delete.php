<?php

include "../../../script/config.php";

session_start();

if($_SESSION['login'] === 'admin' or $_SESSION['login'] === 'fadmin'){

$sql = "DELETE FROM faculty WHERE id='$_GET[id]'";

if (mysqli_query($conn, $sql)) {

    header("location:../index.php");
} else {

    header("location:../index.php");
}
}
?>