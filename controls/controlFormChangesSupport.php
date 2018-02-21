
<!--Change button text when directing from view page-->
<?php if(isset($_POST['submitEdit'])) { ?>
    <script> document.getElementById('mainSubmit').value = "Update Entry"; </script>
<?php };   ?>
<!--Change menue 'Registratio' text when directing from view page-->
<?php if(isset($_POST['submitEdit'])) { ?>
    <script> document.getElementById('headerReg').innerHTML= "Edit Entry"; </script>
<?php };   ?>

<!--Reformat Clinic No when directing from view page ad adjust visibility of buttons-->
<?php if(isset($_POST['submitEdit'])) { ?>
    <script>
        document.getElementById('mainSubmit').style.display = "inline";
        document.getElementById('mainSubmitNew').style.display = "none";
        document.getElementById('mainSubmitNewQueue').style.display = "none";
    </script>
<?php }elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) { ?>
    <script>
    document.getElementById('mainSubmit').style.display = "none";
    document.getElementById('mainSubmitNew').style.display = "none";
    document.getElementById('mainSubmitNewQueue').style.display = "inline";
    </script>
<?php    }else{   ?>

    <script>
        document.getElementById('mainSubmit').style.display = "none";
        document.getElementById('mainSubmitNew').style.display = "inline";
        document.getElementById('mainSubmitNewQueue').style.display = "none";
    </script>

<?php }; ?>

<!--Change Clinic no Style and Radio Buttons-->
<?php if((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))){



    require '../models/dbConnect.php';
    $queryClinicLastDate = "SELECT clinic_dateTime FROM patient_clinic ORDER BY clinic_ID DESC LIMIT 1;";
    $resultClinicLastDate = mysqli_query($db, $queryClinicLastDate) or die(mysqli_error($db));

    //Fetch data from Database
    while ($rowClinicLastDate = mysqli_fetch_row($resultClinicLastDate)) {
    $tableDataArrayClinicLastDate [] = $rowClinicLastDate;
    };

    $patient_lastClinicDateTime = $tableDataArrayClinicLastDate[0][0];
    $lastDate =  substr($patient_lastClinicDateTime, 8, 2);
  //  echo $patient_lastClinicDateTime;
  // echo $lastDate;

    $today = date('d');
  //  echo $today;


    ?>

    <script>
//
//        var tempClinicAssignNo = document.getElementById('subject').value;
//        var finalClinicAssignNo =  + " 000" + tempClinicAssignNo;
//        document.getElementById('subject').value =finalClinicAssignNo;



    if(day !== lastDate){
      //  document.getElementById('subject').value = "001";
        console.log(day);
    }else {
        console.log(day);
     //   var tempClinicNo = document.getElementById('subject').value;
    //    console.log(tempClinicNo );
     //   var finalClinicNo = " 00" + tempClinicNo;
     //   console.log(finalClinicNo);
    //    document.getElementById('subject').value = finalClinicNo;
    }
    document.getElementById('clinicRadioId').style.display = "inline";
    </script>

<?php }else{?>
    <script>
        //set visibility of radio buttons to none in default screen
        document.getElementById('clinicRadioId').style.display = "none";
    </script>



<?php }; ?>

<script>
    function toggleClass() {
        document.getElementById("title").classList.toggle("arrowDown");
        document.getElementById("title").classList.toggle("arrowUp");
    };

    var bodyId = document.getElementById("formBody").id;
    if(bodyId == 'formBody'){
        document.getElementById('firstMenuA').classList.add('styleReg');
        document.getElementById('secondMenuA').classList.add('styleView')
    }

//reformatting clinic no
    var tempClinicNo = document.getElementById('clinicNo').value;
    var finalClinicNo = "m" + " 000" + tempClinicNo;
    document.getElementById('clinicNo').value =finalClinicNo;



</script>






</body>
</html>

