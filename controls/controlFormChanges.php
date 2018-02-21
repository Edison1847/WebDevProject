<?php
if(isset($_POST['submitEdit'])) {

    $edit = $_POST['edit'];

    require 'dbConnect.php';
    $query = "SELECT patient_ID,patient_title,patient_firstName,patient_middleName,patient_lastName,patient_gender,patient_dob,patient_nic,patient_street,patient_village,patient_district,patient_homeTell,patient_mobileTell,patient_email,patient_remarks FROM patient_info WHERE patient_ID='$edit'";
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
    $patient_homeTell = $tableDataArray[0][12];
    $patient_mobileTell = $tableDataArray[0][11];
    $patient_email = $tableDataArray[0][13];
    $patient_remarks = $tableDataArray[0][14];
//convert String to date
    $time = strtotime($patient_dobTemp);
    $patient_dob = date('Y-m-d', $time);


}
if(isset($_POST['updateSubmit'])) {
    require 'dbConnect.php';
    $tempPtId = $_POST['clinicNo'];
    $tempFinalPtId = substr($tempPtId, 5);
    $query = "SELECT patient_ID,patient_title,patient_firstName,patient_middleName,patient_lastName,patient_gender,patient_dob,patient_nic,patient_street,patient_village,patient_district,patient_homeTell,patient_mobileTell,patient_email FROM patient_info WHERE patient_ID='$tempFinalPtId'";
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
    $patient_homeTell = $tableDataArray[0][12];
    $patient_mobileTell = $tableDataArray[0][11];
    $patient_email = $tableDataArray[0][13];
    $patient_remarks = $tableDataArray[0][12];
//convert String to date
    $time = strtotime($patient_dobTemp);
    $patient_dob = date('Y-m-d', $time);

//Give static User Id
    $userIdLevel = 1;

//get changed values
    $newTitle = $_POST['title'];
    $tempTitle = "";
    $newFirstName = $_POST['firstname'];
    $newMiddleName = $_POST['middlename'];
    $newLastName = $_POST['lastname'];
    $newGender = $_POST['gender'];
    $newBday = $_POST['bday'];
    $newNicNumber = $_POST['nicnumber'];
    $newFirstLine = $_POST['firstline'];
    $newSecondLine = $_POST['secondline'];
    $newCity = $_POST['city'];
    $newMobileNumber = $_POST['mobilenumber'];
    $newLandNumber = $_POST['landnumber'];
    $newEmailAddress = $_POST['emailaddress'];



    function updateEntry($needPtId, $colName, $oldValue, $newValue, $userIdLevel, $db){
        if ($oldValue !== $newValue) {
            $insertQuery = "INSERT INTO patient_updatepthistory (patient_ID, update_Field,old_Entry, new_Entry, user_ID) VALUES('$needPtId','$colName','$oldValue','$newValue','$userIdLevel')";
            mysqli_query($db, $insertQuery) or die(mysqli_error($db));

            $updateQuery = "UPDATE patient_info SET $colName = '$newValue' WHERE patient_ID='$needPtId'";
            mysqli_query($db, $updateQuery) or die(mysqli_error($db));
        }
    }
    $ptColName = 'patient_title';
    updateEntry($tempFinalPtId, $ptColName, $patient_title, $newTitle, $userIdLevel, $db);
    $ptColName = 'patient_firstName';
    updateEntry($tempFinalPtId, $ptColName, $patient_firstName, $newFirstName, $userIdLevel, $db);
    $ptColName = 'patient_middleName';
    updateEntry($tempFinalPtId, $ptColName, $patient_middleName, $newMiddleName , $userIdLevel, $db);
    $ptColName = 'patient_lastName';
    updateEntry($tempFinalPtId, $ptColName, $patient_lastName, $newLastName , $userIdLevel, $db);
    $ptColName = 'patient_gender';
    updateEntry($tempFinalPtId, $ptColName, $patient_gender, $newGender , $userIdLevel, $db);
    $ptColName = 'patient_dob';
    updateEntry($tempFinalPtId, $ptColName, $patient_dob, $newBday , $userIdLevel, $db);
    $ptColName = 'patient_nic';
    updateEntry($tempFinalPtId, $ptColName, $patient_nic, $newNicNumber , $userIdLevel, $db);
    $ptColName = 'patient_street';
    updateEntry($tempFinalPtId, $ptColName, $patient_street, $newFirstLine , $userIdLevel, $db);
    $ptColName = 'patient_village';
    updateEntry($tempFinalPtId, $ptColName, $patient_village, $newSecondLine , $userIdLevel, $db);
    $ptColName = 'patient_district';
    updateEntry($tempFinalPtId, $ptColName, $patient_district, $newCity , $userIdLevel, $db);
    $ptColName = 'patient_homeTell';
    updateEntry($tempFinalPtId, $ptColName, $patient_homeTell, $newMobileNumber , $userIdLevel, $db);
    $ptColName = 'patient_mobileTell';
    updateEntry($tempFinalPtId, $ptColName, $patient_mobileTell, $newLandNumber  , $userIdLevel, $db);
    $ptColName = 'patient_email';
    updateEntry($tempFinalPtId, $ptColName, $patient_email, $newEmailAddress , $userIdLevel, $db);
}
if((isset($_POST['buttonQueueSubmit'])) || (isset($_POST['submitAdd']))) {


    require 'dbConnect.php';
    if(isset($_POST['buttonQueueSubmit'])) {
        $tempPtId = $_POST['queueSubmit'];
    }else
        $tempPtId= $_POST['addValue'];
    echo $tempPtId;


    $query = "SELECT patient_ID,patient_title,patient_firstName,patient_middleName,patient_lastName,patient_gender,patient_dob,patient_nic,patient_street,patient_village,patient_district,patient_homeTell,patient_mobileTell,patient_email FROM patient_info WHERE patient_ID='$tempPtId'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));


//Fetch all data from Database
    $tableDataArray = array();
    $i = 0;
    while ($row = mysqli_fetch_row($result)) {

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
    $patient_remarks = $tableDataArray[0][12];
//convert String to date
    $time = strtotime($patient_dobTemp);
    $patient_dob = date('Y-m-d', $time);

//Give static User Id
    $userIdLevel = 1;
}
if((isset($_POST['updateSubmitNew'])) || (isset($_POST['updateSubmitNewQueue']))) {


    if(isset($_POST['updateSubmitNew'])){

        require 'dbConnect.php';
        $userIdLevel = 1;
        //get changed values
        $newTitle = $_POST['title'];
        $tempTitle = "";
        $newFirstName = $_POST['firstname'];
        $newMiddleName = $_POST['middlename'];
        $newLastName = $_POST['lastname'];
        $newGender = $_POST['gender'];
        $newBday = $_POST['bday'];
        $newNicNumber = $_POST['nicnumber'];
        $newFirstLine = $_POST['firstline'];
        $newSecondLine = $_POST['secondline'];
        $newCity = $_POST['city'];
        $newMobileNumber = $_POST['mobilenumber'];
        $newLandNumber = $_POST['landnumber'];
        $newEmailAddress = $_POST['emailaddress'];
        $insertQuery = "INSERT INTO patient_info (patient_title,patient_firstName, patient_middleName,patient_lastName,patient_gender,patient_dob,patient_nic,patient_street,patient_village,patient_district,patient_homeTell,patient_mobileTell,patient_email)
        VALUES('$newTitle','$newFirstName','$newMiddleName','$newLastName','$newGender','$newBday','$newNicNumber','$newFirstLine','$newSecondLine','$newCity','$newMobileNumber','$newLandNumber','$newEmailAddress');";
        mysqli_query($db, $insertQuery) or die(mysqli_error($db));
        mysqli_close($db);
    }else {

        require 'dbConnect.php';


        echo $_POST['subject'];
        //  $clinicIdTemp = $_POST['clinicNo'];
        $clinic_noQueue = $_POST['subject'];

        $clinic_noTemp = $_POST['clinicNo'];
        $clinic_no = substr($clinic_noTemp, 5);

        $clinic_priority = $_POST['priority'];


        $insertQueryQueue = "INSERT INTO patient_clinic (clinic_no,patient_ID, user_ID,clinic_priority)
                VALUES('$clinic_noQueue','$clinic_no','1','$clinic_priority');";
        mysqli_query($db, $insertQueryQueue) or die(mysqli_error($db));
        mysqli_close($db);
    }




}
?>