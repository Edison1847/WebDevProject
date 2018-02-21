<?php
while($row = mysqli_fetch_assoc($result)){
    echo '<tr>';
    foreach ($row as $value) {
        echo '<td>';
        echo $value;
        echo '</td>';
    }
    echo '  <td  ><form id="realAdd" action="form.php" method="POST">
                        <input  title="Add to Queue" type="hidden" name="addValue" value=' .$row["patient_ID"].'>
                       <input type=\'submit\' name=\'submitAdd\' value=\'\' "></form>';

    echo '  <form id="add" action="patientInfo.php" method="POST">
                        <input class=".tooltip "  title="Patient Summery" type="hidden" name="info" value=' .$row["patient_ID"].'>
                       <input type=\'submit\' name=\'submitInfo\' value=\'\' "></form>';

    echo '<form id="edit" action="form.php" method="POST">
                        <input title="Edit Entry" type="hidden" name="edit" value=' .$row["patient_ID"].'>
                       <input  type=\'submit\' name=\'submitEdit\' value=\'\' ></form>';

    echo '<form id="delete" action="home.php" method="POST">
                        <input title="Delete Entry" type="hidden" name="delete" value=' .$row["patient_ID"].'>
                       <input type=\'submit\' name=\'submitDelete\' value=\'\' onclick="refresh()"></form>';
    echo '</td>';
    echo '</tr>';

}
?>