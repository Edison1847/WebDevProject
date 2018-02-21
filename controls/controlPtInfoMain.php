<?php
//get info of submitted ID
if(isset($_POST['submitInfo'])) {
    $edit = $_POST['info'];
    require '../models/dbConnect.php';
    $query = "SELECT patient_ID,patient_title,patient_firstName,patient_middleName,patient_lastName,patient_gender,patient_dob,patient_nic,patient_street,patient_village,patient_district,patient_homeTell,patient_mobileTell,patient_email FROM patient_info WHERE patient_ID='$edit'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    $resultForSearch = mysqli_query($db, $query) or die(mysqli_error($db));

//Fetch all data from Database
    $tableDataArray = array();
    $i = 0;
    while ($row = mysqli_fetch_row($resultForSearch)) {

        $tableDataArray [] = $row;
    };
    $patient_Id = $tableDataArray[0][0];
    $patient_title = $tableDataArray[0][1];
    $patient_firstName = $tableDataArray[0][2];
    $patient_middleName = $tableDataArray[0][3];
    $patient_lastName = $tableDataArray[0][4];
    $patient_gender = $tableDataArray[0][5];
    $patient_dobTemp = $tableDataArray[0][6];
    $patient_nic = $tableDataArray[0][7];
    $patient_street = $tableDataArray[0][8];
    $patient_village = $tableDataArray[0][9];
    $patient_district = $tableDataArray[0][10];
    $patient_homeTell = $tableDataArray[0][11];
    $patient_mobileTell = $tableDataArray[0][12];
    $patient_email = $tableDataArray[0][13];
//    $patient_remarks = $tableDataArray[0][12];
//convert String to date
    $time = strtotime($patient_dobTemp);
    $patient_dob = date('Y-m-d', $time);

//fetch data from clinic table
    $queryUpdateHistory = "SELECT update_Field, old_Entry, new_Entry, update_date FROM patient_updatepthistory WHERE patient_ID='$edit' ";
    $resultUpdateHistory = mysqli_query($db, $queryUpdateHistory) or die(mysqli_error($db));
    //Fetch all data from Database
    $tableDataArrayUpdateHistory = array();

}
;?>