<?php require 'header.php';?>

<?php

require 'dbConnect.php';
$query= "SELECT patient_ID, concat(patient_title, ' ' , patient_firstName, ' ', patient_middleName, ' ',patient_lastName) AS patient_Name,  patient_gender,patient_dob,patient_nic,concat(patient_street, ' ' , patient_village, ' ', patient_district) AS patient_address,  patient_homeTell,patient_mobileTell,patient_email FROM patient_info WHERE patient_softDelete = '0'";
$result = mysqli_query($db,$query) or die(mysqli_error($db)) ;
$resultForSearch = mysqli_query($db,$query) or die(mysqli_error($db)) ;


//Fetch all data from Database
$tableDataArray = array();
$i =0;
while( $row=mysqli_fetch_row($resultForSearch)){

    $tableDataArray [] = $row;
};
$userSearchArray = json_encode($tableDataArray);
?>