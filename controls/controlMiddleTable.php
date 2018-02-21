<?php
echo '<div id="tableDiv">';
echo '<table id="myTable" class="" cellspacing="0" width="100%">';
echo '<thead>';
echo '<tr>'; ?>

<th>Clinic No</th>
<th style="width: 75px;">Name</th>
<th>Gender</th>
<th>Birthday</th>
<th>NIC</th>
<th>Address</th>
<th>Home Tell</th>
<th>Mobile Tell</th>
<th>Email</th>
<th></th>
<?php
echo '</tr>';
echo '</thead>';
echo '<tbody>';
while( $rowUserId=mysqli_fetch_assoc($resultSearch)) {

    $data[] =  $rowUserId;
}
while( $rowUserIdReal=mysqli_fetch_assoc($resultForSearchSearch )) {

    $dataReal[] =  $rowUserIdReal;
}
for ($i = 0; $i < count($data); ++$i) {
    if ((!empty($_POST['ptNoSearch'])) && (!empty($_POST['ptNameSearch'])) && (empty($_POST['ptNicSearch'])) &&  (empty($_POST['ptIDSearch']))) {

        compareTwoSearchResults('patient_lastName', 'patient_district', 'ptNoSearch', 'ptNameSearch', $data,$dataReal, $i);

    }
    else if ((!empty($_POST['ptNoSearch'])) && (empty($_POST['ptNameSearch'])) && (empty($_POST['ptNicSearch'])) && (empty($_POST['ptIDSearch']))) {

        //echo $_POST['ptNoSearch'];
        singleSearchResults('patient_lastName', $_POST['ptNoSearch'],  $data,$dataReal, $i);

    }
    else if ((empty($_POST['ptNoSearch'])) && (!empty($_POST['ptNameSearch'])) && (empty($_POST['ptNicSearch'])) && (empty($_POST['ptIDSearch']))) {

        singleSearchResults('patient_district', $_POST['ptNameSearch'],  $data,$dataReal, $i);

    }
    else if ((!empty($_POST['ptIDSearch'])) && (empty($_POST['ptNameSearch'])) && (empty($_POST['ptNoSearch'])) && (empty($_POST['ptNicSearch'])))  {

        singleUncombinedSearchResults ('patient_ID', $_POST['ptIDSearch'], $dataReal, $i);

    }
    else if ((empty($_POST['ptIDSearch'])) && (empty($_POST['ptNameSearch'])) && (empty($_POST['ptNoSearch'])) && (!empty($_POST['ptNicSearch'])))  {

        singleUncombinedSearchResults ('patient_nic', $_POST['ptNicSearch'], $dataReal, $i);

    }
    else
        header("location:home.php");

}

echo '</tbody>';
echo '</table>'; ?>
<div id="tableButtons">
</div>
<div id="delEntries">
    <a></a>
</div>
</div>
<div id="QueueDel" style="margin-top: 95px; font-size: 13px; ">
    <a style="color: darkgrey" href="clinicEntries.php">Queue</a><a href="" style="margin-left: 25px;color: darkgrey">Deleted Entries</a>
</div>
</div>
