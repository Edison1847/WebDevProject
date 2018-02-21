<!--Render Clinic Queue-->
<?php
session_start();
if($_SESSION['loggedin'] == TRUE){
    require 'header.php';
    require '../views/viewsClinicEntryMain.php';
    require '../controls/controlClinicEntTable.php';
    require '../views/viewsClinicEntButtons.php';
    require '../views/partials/footer.php';
};
?>

