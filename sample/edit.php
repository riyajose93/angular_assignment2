<?php
include 'connection.php';
$sid=$_GET["uid"];
//echo $sid;
if(isset($_POST["submit"])){
     $nme1=$_POST["nme"];
     $adr1=$_POST["adr"];
     $ph1=$_POST["ph"];
     mysqli_query($con,"UPDATE `stud` SET `name`='$nme1',`address`='$adr1',`phno`='$ph1' WHERE id='$sid'");
     header("Location:view.php");
}
$res=mysqli_query($con,"select * from `stud` where id='$sid'");
$row= mysqli_fetch_array($res);

?>

<html>
    <head>
    </head>
    <body>
        <form action="#" method="post">
            <table>
                <tr>
                    <td> Name:</td>
                    <td><input type="text"name="nme"value="<?php echo $row["name"];?>"></td>
                </tr>
                <tr>
                    <td> Address:</td>
                    <td><input type="text"name="adr" value="<?php echo $row["address"];?>"></td>
                </tr>
                <tr>
                    <td>Phno:</td>
                    <td><input type="text"name="ph" value="<?php echo $row["phno"];?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"name="submit"></td>
                </tr>
            </table>
            
            
        </form>
    </body>
</html>


