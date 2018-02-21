<body class="patientInfo">

<main class="ptInfoMain">
    <section class="verticalBar">
        <div class="logo" align="center"><img src="../stylesheets/images/Emblem_of_Sri_Lanka.png"></div>
        <h4 align="center">National Hospital</h4>
        <h5 align="center">Medical Clinic - A</h5>
        <h3 >CONTACTS</h3>
        <hr>
        <div class="innerGroup">
            <img src="../stylesheets/images/geo%20tag.png"> <span id="innerAdd" ><?php echo $patient_street." ".$patient_village. " ".$patient_district; ?> </span></br>
        </div>
        <div class="innerGroup">
            <img src="../stylesheets/images/landphone.png"><span ><?php echo $patient_homeTell; ?></span></br>
        </div>
        <div class="innerGroup">
            <img src="../stylesheets/images/mobile.png"><span ><?php echo $patient_mobileTell; ?></span></br>
        </div>
        <div class="innerGroup">
            <img src="../stylesheets/images/email.png"><span ><?php echo $patient_email; ?></span></br>
        </div>
        <h3 >HOSPITAL DETAILS</h3>
        <hr>
        <div class="lowerInnerGroup">
            <p class="pAlign" id="loInAddress">Address :</p> <span class="lowerSpan" id="lowerSpanAddress">National Hospital, Colombo, Sri Lanka</span></br>
        </div>
        <div class="lowerInnerGroup">
            <p class="pAlign" id="loInTell">Tell No :</p> <span class="lowerSpan">012877456</span></br>
        </div>
        <div class="lowerInnerGroup">
            <p class="pAlign" id="loInEmail" >Email :</p> <span class="lowerSpan" id="lowerSpanEmail">nhsl@gmail.com</span></br>
        </div>
    </section>


    <header class="ptInfoHeader">
        <div class="ptInfoHeaderInner">
            <div class="topIcon  " align="center"><img src="../stylesheets/images/PtInfoHeadIcon.png"></div>
            <h1 align="center"><?php echo $patient_firstName." ".$patient_lastName; ?></h1>
            <h2 align="center">Profile Summery</h2>
        </div>
    </header>


    <section class="para">
        <div class="upperSection">
            <h4>Personal Profile</h4>
            <div class="alignPara">
                <p>Clinic No :</p><p><?php echo "&nbsp m 000".$patient_Id; ?>  </p>
            </div>
            <div class="alignPara">
                <p>Name :</p><p><?php echo "&nbsp ".$patient_title." ". $patient_firstName." ".$patient_middleName." ".$patient_lastName; ?>  </p>
            </div>
            <div class="alignPara">
                <p>Gender :</p><p><?php echo "&nbsp ".$patient_gender; ?></p>
            </div>
            <div class="alignPara">
                <p>DOB :</p><p><?php echo "&nbsp ".$patient_dob; ?></p>
            </div>
            <div class="alignPara">
                <p>NIC :</p><p><?php echo "&nbsp ".$patient_nic; ?></p>
            </div>
        </div>
        <div class="interHead"><h4 id="interHead">Clinic Visits History</h4></div>
        <div id="tableDiv " class="lowerSection" >
            <table id="myTable" class="" cellspacing="0" width="100%" style="line-height: 12px;">
                <thead>
                <tr>
                    <th >Queue No</th>
                    <th>Clinic Date & Time</th>
                    <th>Priority</th>
                    <th>Entered By</th>


                </tr>
                </thead>
                <tbody>