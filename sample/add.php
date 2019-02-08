
<?php
include 'connection.php';
if(isset($_POST["submit"])){
     $nme1=$_POST["nme"];
     $adr1=$_POST["adr"];
     $ph1=$_POST["ph"];
    mysqli_query($con,"INSERT INTO `stud`(`name`, `address`, `phno`) VALUES ('$nme1','$adr1','$ph1')" );
    header("Location:view.php");
}
?>

<!DOCTYPE html>

<html>
    <head>
    </head>
    <body>
        <form action="#" method="post">
            <table>
                <tr>
                    <td> Name:</td>
                   <td><input type="text"name="nme"></td>
                </tr>
                <tr>
                    <td> Address:</td>
                   <td><input type="text"name="adr"></td>
                </tr>
                <tr>
                    <td>Phno:</td>
                    <td><input type="text"name="ph"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"name="submit"></td>
                </tr>
            </table>
            
            
        </form>
    </body>
</html>
