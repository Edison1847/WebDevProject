<!--Render Clinic Queue-->
<?php
session_start();
if($_SESSION['loggedin'] == TRUE){
    require '../views/partials/header.php';
    require '../views/viewsClinicEntryMain.php';
    require '../controls/controlClinicEntTable.php';
    require '../views/viewsClinicEntButtons.php';
    require '../views/partials/footer.php';
};
?>

