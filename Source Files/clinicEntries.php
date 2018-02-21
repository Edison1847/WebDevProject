<!--Render Clinic Queue-->
<?php
session_start();
if($_SESSION['loggedin'] == TRUE){
    require 'header.php';
    require '../views/viewsClinicEntryMain.php';
    require '../controls/controlClinicEntTable.php';
    ?>
        </tbody>
    </table>
    <div id="tableButtons">
    </div>
    <div id="delEntries">
        <a></a>
    </div>
    <div id align="center">
        <a href="home.php" id="buttonDel" al>Back</a>
    </div>
</div>

<?php
    require '../controls/controlClinicEntSupport.php';
    require 'footer.php';};
?>

