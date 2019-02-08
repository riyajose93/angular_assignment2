<html>
    <head></head>
    <body>
        <table border="1">
            
            <div class="form-group">
                    
                                
                    <div class="form-select">

                                    <select  name="cname" id="cname">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "assignment1");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                            $sql = "Select cid, cname from country";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_array($sql)) {
                echo '<option value=' . $row['cid'] . '>' . $row['cname'] . '</option>';
            }
                                            echo "<option value =><------Select Country------></option>";
                                            while ($row = mysqli_fetch_array($result)) {
                                                $cname = $row['cname'];
                                                $cid = $row['cid'];
                                                echo "<option value='$cname'>$cname</option>";
                                            }
                                        }
                                        mysqli_close($con);
                                        ?>
                                    </select>



                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>

                
            </table>
            
       
    </body>
</html>