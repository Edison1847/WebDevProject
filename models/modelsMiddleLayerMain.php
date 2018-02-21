<?php
//connect to database
require '../models/dbConnect.php';
//querying database
$querySearch= "SELECT * FROM patient_info";
$querySearchConcat = "SELECT patient_ID, concat(patient_title, ' ' , patient_firstName, ' ', patient_middleName, ' ',patient_lastName) AS patient_Name,  patient_gender,patient_dob,patient_nic,concat(patient_street, ' ' , patient_village, ' ', patient_district) AS patient_address,  patient_homeTell,patient_mobileTell,patient_email FROM patient_info";
$resultSearch = mysqli_query($db,$querySearch) or die(mysqli_error($db)) ;
$resultForSearchSearch = mysqli_query($db,$querySearchConcat) or die(mysqli_error($db)) ;

//Fetch all data from Database
$tableDataArray = array();
$i =0;
?>