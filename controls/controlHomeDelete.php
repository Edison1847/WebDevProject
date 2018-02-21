<?php
//Delete entries
if(isset($_POST['submitDelete'])){
    $delete =  $_POST['delete'];
    $db2 = mysqli_connect("localhost","root","","pt_reg_db");
    mysqli_query($db2,"UPDATE patient_info SET patient_softDelete = '1' WHERE patient_ID='$delete '") or die(mysqli_error($db2));
    mysqli_close($db2);
}
?>