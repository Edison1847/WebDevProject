<?php
session_start();
if($_SESSION['loggedin'] == TRUE){
    require 'header.php';
    require '../controls/controlPtInfoMain.php';
    require '../views/viewsPtInfoBody.php';
    require '../controls/controlPtInfoTable.php';
    require '../views/viewsPtInfoButtons.php';
}
?>







