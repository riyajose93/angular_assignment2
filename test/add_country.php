<?php
include "dbconnection.php";
if(isset($_POST["submit"])){
     $cnm=$_POST["cnme"];
    mysqli_query($con,"INSERT INTO `country`(`cname`) VALUES ('$cnm')");
   // header("Location:view.php");
}
?>

<html>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>Country</td>
                    <td><input type="text" name="cnme"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="add"></td>
               
                </tr>
            </table>
        </form>
    </body>
</html>