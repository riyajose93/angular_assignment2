<?php
include 'connection.php';
$kid=$_GET["uid"];
//echo $kid;
mysqli_query($con, "DELETE FROM `stud` WHERE id='$kid'");
header("Location:view.php");
?>