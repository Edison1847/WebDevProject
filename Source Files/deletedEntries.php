<!-- Render deleted Entries-->
<?php
session_start();
if($_SESSION['loggedin'] == TRUE){
    require '../views/partials/header.php';
    require '../views/viewsDelEntMain.php';
    require '../controls/controlDelEntTable.php';
    require '../views/viewsDelEntButtons.php';
    require '../views/partials/footer.php';
    }
?>





