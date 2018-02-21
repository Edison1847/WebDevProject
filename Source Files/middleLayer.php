<!--Render page after main search query-->
<?php
session_start();
if($_SESSION['loggedin'] == TRUE){

    require '../views/partials/header.php';
    require '../models/modelsMiddleLayerMain.php';
    require '../controls/controlMiddleMainLogic.php';
    require '../views/viewsMiddleSearch.php';
    require '../controls/controlMiddleTable.php';
    require '../controls/controlsMiddleDelete.php';
    require '../controls/controlMiddleSupport.php';

}?>