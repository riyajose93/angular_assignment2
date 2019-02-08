<?php
include 'connection.php';
if(isset($_POST["submit"])){
    echo $nme1=$_POST["nme"];
    echo $adr1=$_POST["adr"];
    echo $ph1=$_POST["ph"];
    mysqli_query($con,"INSERT INTO `stud`(`name`, `address`, `phno`) VALUES ('$nme1','$adr1','$ph1')" );
}
?>
