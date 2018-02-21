<?php
function compareTwoSearchResults($colOne, $colTwo, $searchOne, $searchTwo, $data,$dataReal, $i)
{

    $SubStringValue = substr($data[$i][$colOne], 0, strlen($_POST[$searchOne]));
    $SubStringValueTwo = substr($data[$i][$colTwo], 0, strlen($_POST[$searchTwo]));
//    echo $SubStringValue;
//    echo $SubStringValueTwo ;


    if (($_POST[$searchOne] == $SubStringValue) && ($_POST[$searchTwo] == $SubStringValueTwo)) {
        assignValuesToTableCells($dataReal, $i);
    }
}
function singleSearchResults($colOne, $searchOne,  $data,$dataReal, $i)
{
    //echo $searchOne;
    $SubStringValue = substr($data[$i][$colOne], 0, strlen ($searchOne));
    if ($searchOne == $SubStringValue){
        //  echo $colOne;
        //  echo $searchOne;
        //  echo $SubStringValue ;
        assignValuesToTableCells($dataReal, $i);
    }
}
function singleUncombinedSearchResults ($col,$search,$dataReal,$i){
    if ($search == $dataReal[$i][$col]){
        //  echo $colOne;
        //  echo $searchOne;
        //  echo $SubStringValue ;
        assignValuesToTableCells($dataReal, $i);
    }
}
function assignValuesToTableCells($dataReal, $i)
{
    echo '<tr>';
    echo '<td>';
    echo $dataReal[$i]['patient_ID'];
    echo '</td>';
    echo '<td>';
    echo $dataReal[$i]['patient_Name'];
    echo '</td>';
    echo '<td>';
    echo $dataReal[$i]['patient_gender'];
    echo '</td>';
    echo '<td>';
    echo $dataReal[$i]['patient_dob'];
    echo '</td>';
    echo '<td>';
    echo $dataReal[$i]['patient_nic'];
    echo '</td>';
    echo '<td>';
    echo $dataReal[$i]['patient_address'];
    echo '</td>';
    echo '<td>';
    echo $dataReal[$i]['patient_homeTell'];
    echo '</td>';
    echo '<td>';
    echo $dataReal[$i]['patient_mobileTell'];
    echo '</td>';
    echo '<td>';
    echo $dataReal[$i]['patient_email'];
    echo '</td>';

    echo '  <td  ><form id="realAdd" action="form.php" method="POST">
                        <input  title="Add to Queue" type="hidden" name="addValue" value=' .$dataReal[$i]['patient_ID'].'>
                       <input type=\'submit\' name=\'submitAdd\' value=\'\' "></form>';

    echo '  <form id="add" action="patientInfo.php" method="POST">
                        <input class=".tooltip "  title="Patient Summery" type="hidden" name="info" value=' .$dataReal[$i]['patient_ID'].'>
                       <input type=\'submit\' name=\'submitInfo\' value=\'\' "></form>';

    echo '<form id="edit" action="form.php" method="POST">
                        <input title="Edit Entry" type="hidden" name="edit" value=' .$dataReal[$i]['patient_ID'].'>
                       <input  type=\'submit\' name=\'submitEdit\' value=\'\' ></form>';

    echo '<form id="delete" action="home.php" method="POST">
                        <input title="Delete Entry" type="hidden" name="delete" value=' .$dataReal[$i]['patient_ID'].'>
                       <input type=\'submit\' name=\'submitDelete\' value=\'\' onclick="refresh()"></form>';
    echo '</td>';
    echo '</tr>';










}
?>