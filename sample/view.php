<?php
include 'connection.php';
?> 
<a href="add.php">ADD USER</a><br><br>
<table border="1">
    <tr>
        <td> Name:</td>
        <td> Address:</td>
        <td>Phno:</td>
        <td>Edit:</td>
        <td>Delete:</td>
    </tr>
    <?php
    $res = mysqli_query($con, "SELECT * FROM `stud`");

    while ($row = mysqli_fetch_array($res)) {
//print_r($row);
        ?>
        <tr>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["phno"]; ?></td>
            <td><a href="edit.php?uid=<?php echo $row["id"];?>">edit</a></td>
            <td><a href="delete.php?uid=<?php echo $row["id"];?>">delete</a></td>
        </tr> 
    <?php
}
?>
</table>


