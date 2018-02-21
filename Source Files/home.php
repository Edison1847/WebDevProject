<!--Render main table view-->
<?php
session_start();
if($_SESSION['loggedin'] == TRUE) {
    require '../models/modelHomeMain.php';
    require '../views/viewsHomeBody.php';
    require '../controls/controlsHomeTable.php';
    require '../views/viewsHomeLowerBody.php';
    require '../controls/controlHomeDelete.php';
    require '../controls/controlHomeSupport.php';
    require '../views/partials/footer.php';
}
?>














