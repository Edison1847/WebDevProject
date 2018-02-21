<?php
require 'dbConnect.php';

if (isset($_POST['when'])) {
    if ($_POST['when'] == 'all') {
        $queryAll = "SELECT clinic_no,patient_info.patient_lastName, clinic_dateTime  ,clinic_priority,user_info.user_name FROM patient_clinic  INNER JOIN patient_info ON patient_clinic.patient_ID = patient_info.patient_ID INNER  JOIN user_info on patient_clinic.user_ID = user_info.user_ID ORDER BY clinic_dateTime DESC  ;";
        $resultAll = mysqli_query($db, $queryAll) or die(mysqli_error($db));
        while ($rowClinicQueue = mysqli_fetch_assoc($resultAll)) {
            echo '<tr>';
            foreach ($rowClinicQueue as $valueClinicQueue) {
                echo '<td>';
                echo $valueClinicQueue;
                echo '</td>';
            }
            echo '</tr>';
        }
        mysqli_close($db);
    } elseif ($_POST['when'] == 'today') {
        $queryToday = "SELECT clinic_no,patient_info.patient_lastName, clinic_dateTime  ,clinic_priority,user_info.user_name FROM patient_clinic  INNER JOIN patient_info ON patient_clinic.patient_ID = patient_info.patient_ID INNER  JOIN user_info on patient_clinic.user_ID = user_info.user_ID WHERE DATE (clinic_dateTime)= CURDATE()  ORDER BY clinic_dateTime DESC  ;";
        $resultToday = mysqli_query($db, $queryToday) or die(mysqli_error($db));
        while ($rowClinicQueue = mysqli_fetch_assoc($resultToday)) {
            echo '<tr>';
            foreach ($rowClinicQueue as $valueClinicQueue) {
                echo '<td>';
                echo $valueClinicQueue;
                echo '</td>';
            }
            echo '</tr>';
        }
        mysqli_close($db);
    }} elseif (isset($_POST['sort'])){

    $givenValue = $_POST['sort'];

    $queryGivenDate = "SELECT clinic_no,patient_info.patient_lastName, clinic_dateTime  ,clinic_priority,user_info.user_name FROM patient_clinic  INNER JOIN patient_info ON patient_clinic.patient_ID = patient_info.patient_ID INNER  JOIN user_info on patient_clinic.user_ID = user_info.user_ID WHERE DATE (clinic_dateTime)= '$givenValue'  ORDER BY clinic_dateTime DESC  ;";
    $resultGivenDate = mysqli_query($db, $queryGivenDate) or die(mysqli_error($db));
    while ($rowClinicQueue = mysqli_fetch_assoc($resultGivenDate)) {
        echo '<tr>';
        foreach ($rowClinicQueue as $valueClinicQueue) {
            echo '<td>';
            echo $valueClinicQueue;
            echo '</td>';
        }
        echo '</tr>';
    }
    mysqli_close($db);


} else {

    $queryToday = "SELECT clinic_no,concat(patient_info.patient_title, ' ' , patient_info.patient_firstName, ' ', patient_info.patient_middleName, ' ',patient_info.patient_lastName) AS patient_Name, clinic_dateTime  ,clinic_priority,user_info.user_name FROM patient_clinic  INNER JOIN patient_info ON patient_clinic.patient_ID = patient_info.patient_ID INNER  JOIN user_info on patient_clinic.user_ID = user_info.user_ID WHERE DATE (clinic_dateTime)= CURDATE()  ORDER BY clinic_dateTime DESC  ;";
    $resultToday = mysqli_query($db, $queryToday) or die(mysqli_error($db));
    while ($rowClinicQueue = mysqli_fetch_assoc($resultToday)) {
        echo '<tr>';
        foreach ($rowClinicQueue as $valueClinicQueue) {
            echo '<td>';
            echo $valueClinicQueue;
            echo '</td>';
        }
        echo '</tr>';
    }
    mysqli_close($db);
}
?>

