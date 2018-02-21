<?php
require 'dbConnect.php';

$query= "SELECT patient_ID, concat(patient_title, ' ' , patient_firstName, ' ', patient_middleName, ' ',patient_lastName) AS patient_Name,  patient_gender,patient_dob,patient_nic,concat(patient_street, ' ' , patient_village, ' ', patient_district) AS patient_address,  patient_homeTell,patient_mobileTell,patient_email FROM patient_info WHERE patient_softDelete = '1'";

$result = mysqli_query($db,$query) or die(mysqli_error($db)) ;



while($row = mysqli_fetch_assoc($result)){

    echo '<tr>';
    foreach ($row as $value) {
        echo '<td>';
        echo $value;
        echo '</td>';

    }
    echo '<td>';
    echo 'Admin';
    echo '</td>';
    echo '</tr>';

}



mysqli_close($db);
?>