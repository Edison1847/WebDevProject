<?php

require '../models/dbConnect.php';
$queryClinicQueue= "SELECT clinic_no,clinic_dateTime,clinic_priority,user_ID FROM patient_clinic WHERE patient_ID = '$patient_Id' ORDER BY 'clinic_dateTime' ASC";
$resultClinicQueue = mysqli_query($db,$queryClinicQueue) or die(mysqli_error($db)) ;

while($rowClinicQueue = mysqli_fetch_assoc($resultClinicQueue)){

    echo '<tr>';
    foreach ($rowClinicQueue as $valueClinicQueue) {
        echo '<td>';
        echo $valueClinicQueue;
        echo '</td>';

    }
    echo '</tr>';
}

?>
</tbody>
</table>
<div id="tableButtons">
</div>
</div>
<div class="interHead"><h4 id="interHead">Profile Edit History</h4></div>
<div id="editContent">
<?php
while($row = mysqli_fetch_assoc($resultUpdateHistory)){
    echo "<h5>";
    foreach ($row as $value) {

        echo  $value. "&nbsp | &nbsp";

    }
    echo "by Admin";
    echo "</h5>";
    echo "</br>";
}
?>