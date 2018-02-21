<header>

    <div id="headerImgDiv">
        <img src="../stylesheets/images/Header5.png">
    </div>
</header>
<section class="menu">
    <div class="outerContent">
        <div class="innerContent">
            <div id="menuOne">
                <a href="/Assesment/WebDevProject/Source Files/form.php" id="firstMenuA" class="styleReg">
                    <h5 id="headerReg">Registration</h5>
                    <hr>
                </a>
            </div>
            <div id="menuTwo">
                <a href="/Assesment/WebDevProject/Source Files/home.php" id="secondMenuA" class="styleView">
                    <h5>View</h5>
                    <hr>
                </a>
            </div>
        </div>
    </div>
    <div id="login">
        <a href="form.php" id="logYes">You have logged in</a>
        <a href="logout.php" id="logNo">Log out</a>
    </div>

</section>



<div class="container">
    <form action="" method="post">
        <div class="upperBox">

            <div class="row">
                <div class="col-25">
                    <label for="clinicNo" class="mylabel">Clinic No</label>
                </div>
                <div class="col-75" id="nameFields">
                    <input type="text"  id="clinicNo" name="clinicNo"  value="<?php if(isset($_POST['submitEdit'])){echo $patient_Id;}
                    elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd'])))   {
                        echo $patient_Id;
                    }
                    else{
                        require '../models/dbConnect.php';
                        $query = "SELECT patient_ID FROM patient_info ORDER BY patient_ID DESC LIMIT 1;";
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));

                        //Fetch data from Database
                        while ($row = mysqli_fetch_row($result)) {
                            $tableDataArray [] = $row;
                        };
                        $patient_Id = $tableDataArray[0][0];
                        echo ($patient_Id + 1 );
                    }; ?>"
                    >
                </div>
            </div>



            <div class="row">
                <div class="col-25">
                    <label for="Title" class="mylabel">Title</label>
                </div>


                <div class="col-75">
                    <select id="title" name="title" onclick="toggleClass()" class="arrowDown">
                        <option value="title" >Title</option>
                        <option value="Mr." <?php if(isset($_POST['submitEdit'])){ if($patient_title == 'Mr.'){echo "selected";}}
                        elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd'])))  {if($patient_title == 'Mr.'){echo "selected";}}?> >Mr.</option>
                        <option value="Mrs." <?php if(isset($_POST['submitEdit'])){ if($patient_title == 'Mrs.'){echo "selected";}}
                        elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd'])))  {if($patient_title == 'Mrs.'){echo "selected";}}?> >Mrs.</option>
                        <option value="Miss." <?php if(isset($_POST['submitEdit'])){ if($patient_title == 'Miss.'){echo "selected";}}
                        elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd'])))  {if($patient_title == 'Miss.'){echo "selected";}}?> >Miss.</option>
                        <option value="Baby" <?php if(isset($_POST['submitEdit'])){ if($patient_title == 'Baby'){echo "selected";}}
                        elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd'])))  {if($patient_title == 'Baby'){echo "selected";}}?> >Baby</option>
                        <option value="Master" <?php if(isset($_POST['submitEdit'])){ if($patient_title == 'Master'){echo "selected";}}
                        elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd'])))  {if($patient_title == 'Master'){echo "selected";}}?> >Master</option>
                        <option value="Rev." <?php if(isset($_POST['submitEdit'])){ if($patient_title == 'Rev.'){echo "selected";}}
                        elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd'])))  {if($patient_title == 'Rev.'){echo "selected";}}?> >Rev.</option>
                        <option value="Dr." <?php if(isset($_POST['submitEdit'])){ if($patient_title == 'Dr.'){echo "selected";}}
                        elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd'])))  {if($patient_title == 'Dr.'){echo "selected";}}?> >Dr.</option>
                    </select>
                </div>
            </div>



            <div class="row">
                <div class="col-25">
                    <label for="fname" class="mylabel">First Name</label>
                </div>
                <div class="col-75" id="nameFields">
                    <input type="text" class="nameIcon" id="fName" name="firstname" required="required" pattern="[A-Za-z]{1,20}" placeholder="First Name.." value="<?php if(isset($_POST['submitEdit'])){echo $patient_firstName;}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {echo $patient_firstName;}; ?>">
                    <input type="text" class="nameIcon" id="mName" name="middlename"  pattern="[A-Za-z]{1,20}" placeholder="Middle Name.." value="<?php if(isset($_POST['submitEdit'])){echo $patient_middleName;}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {echo $patient_middleName;}; ?>">
                    <input type="text" class="nameIcon" id="lName" name="lastname" required="required" pattern="[A-Za-z]{1,20}" placeholder="Last Name.." value="<?php if(isset($_POST['submitEdit'])){echo $patient_lastName;}elseif((isset($_POST['buttonQueueSubmit'])) || (isset($_POST['submitAdd']))) {echo $patient_lastName;}; ?>">
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <label for="gender" class="mylabel">Gender</label>
                </div>
                <div class="col-75">
                    <ul>
                        <li class="searchGenderLi">
                            <input type="radio" name="gender" class="gender" id="male" value="male" checked <?php if(isset($_POST['submitEdit'])){ if($patient_gender == 'male'){echo "checked";}}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) { if($patient_gender == 'male'){echo "checked";}}?> >
                            <label for="male">Male</label>
                        </li>
                        <li class="searchGenderLi" >
                            <input type="radio" name="gender"class="gender" id="female"  value="female" <?php if(isset($_POST['submitEdit'])){ if($patient_gender == 'female'){echo "checked";}}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) { if($patient_gender == 'male'){echo "checked";}}?>?>
                            <label for="female">Female</label>
                        </li>
                        <li >
                            <input type="radio" name="gender"  class="gender" id="other" value="other" <?php if(isset($_POST['submitEdit'])){ if($patient_gender == 'other'){echo "checked";}}elseif ((isset($_POST['buttonQueueSubmit'])) || (isset($_POST['submitAdd']))) { if($patient_gender == 'male'){echo "checked";}}?>?>
                            <label for="other">Other</label>
                        </li>
                    </ul>

                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <label for="bday" class="mylabel">Date of Birth</label>
                </div>
                <div class="col-75">
                    <input type="date" max="2020-12-31" min="1900-01-01'" name="bday" id="inputDate"  value="<?php if(isset($_POST['submitEdit'])){echo $patient_dob;}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {echo $patient_dob;}else {echo null;}; ?>">
                </div>
            </div>



            <div class="row">
                <div class="col-25">
                    <label for="nic" class="mylabel">NIC Number</label>
                </div>
                <div  class="col-75" style="display: flex">
                    <input type="text" id="nicNo" name="nicnumber" onkeyup="myNumberValidateFunctionIC()" maxlength="10" NIC Number.." value="<?php if(isset($_POST['submitEdit'])){echo $patient_nic;}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {echo $patient_nic;}; ?>">
                    <div class="validateLabelsIn" >
                        <div class="validateLabelsInNo " style="display: block" >
                            <div class="mobLabel" style="margin: 10px 0 0 15px;" >
                                <img id=thumbsUpNic style=" height: 15px;width: 15px; visibility: hidden" src="../stylesheets/images/thumbs%20up.png">
                                <img id=thumbsDownNic style=" height: 15px;width: 15px; visibility: hidden" src="../stylesheets/images/thumbs%20down.png">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </br>

        <div class="lowerBox">
            <div class="row">
                <div class="col-25">
                    <label for="add" class="mylabel">Address</label>
                </div>

                <div class="col-75" >
                    <input type="text" id="1stline" name="firstline" placeholder="Street / Lane" class="myAddress" style="margin-right: 30px" value="<?php if(isset($_POST['submitEdit'])){echo $patient_street;}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {echo $patient_street;}; ?>">
                    <input type="text" pattern="[A-Za-z]{1,25}" id="2ndline" name="secondline" placeholder="Village" class="myAddress" style="margin-right: 30px" value="<?php if(isset($_POST['submitEdit'])){echo $patient_village;}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {echo $patient_village;}; ?>">
                    <input type="text" pattern="[A-Za-z]{1,25}" id="city" name="city" placeholder="District" class="myAddress" value="<?php if(isset($_POST['submitEdit'])){echo $patient_district;}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {echo $patient_district;}; ?>">

                </div>
            </div>



            <div class="row">
                <div class="col-25">
                    <label for="nic" class="mylabel">Contact Numbers</label>
                </div>

                <div class="col-75" class="mobAlign" style="display: flex; justify-content: flex-start">
                    <div >
                        <input type="number" id="mobno" name="mobilenumber"  maxlength="10" onkeyup="myNumberValidateFunctionMP()" placeholder="Mobile Number.." class="myPhone" value="<?php if(isset($_POST['submitEdit'])){echo $patient_homeTell;}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {echo $patient_homeTell;}; ?>">
                        <div class="validateLabelsInNo" >
                            <div class="mobLabel" style="margin-left: 310px;" >
                                <img id="thumbsUpMob" style="height: 15px;width: 15px; visibility: hidden" src="../stylesheets/images/thumbs%20up.png">
                                <img id="thumbsDownMob" style="height: 15px;width: 15px; visibility: hidden" src="../stylesheets/images/thumbs%20down.png">
                            </div>
                        </div>
                    </div>
                    <div >
                        <input type="number" id="landno"  name="landnumber"  placeholder="Land Number.." onkeyup="myNumberValidateFunctionHP()" class="myPhone" value="<?php if(isset($_POST['submitEdit'])){echo $patient_mobileTell;}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {echo $patient_mobileTell;}; ?>">
                        <div class="validateLabelsInNo " style="display: block" >
                            <div class="mobLabel" style="margin-left: 310px;" >
                                <img id="thumbsUpLand" style="height: 15px;width: 15px; visibility: hidden" src="../stylesheets/images/thumbs%20up.png">
                                <img id="thumbsDownLand" style="height: 15px;width: 15px; visibility: hidden" src="../stylesheets/images/thumbs%20down.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-25">
                    <label for="nic" class="mylabel" >Email Address</label>
                </div>

                <div class="col-75">
                    <input type="text" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" onkeyup="emailValidate()" name="emailaddress" placeholder="name@mail.com" value="<?php if(isset($_POST['submitEdit'])){echo $patient_email;}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {echo $patient_email;}; ?>">
                    <div class="validateLabelsInNo " style="display: block" >
                        <div class="mobLabel" style="margin-left: 310px;" >
                            <img id="thumbsUpEmail" style="height: 15px;width: 15px; visibility: hidden" src="../stylesheets/images/thumbs%20up.png">
                            <img id="thumbsDownEmail" style="height: 15px;width: 15px; visibility: hidden" src="../stylesheets/images/thumbs%20down.png">
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-25">
                    <label for="subject" class="mylabel" style="<?php if((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {
                        echo "color: #4fba6f;";
                    };?>"><?php if((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {echo "Queue No";}else{echo "Remarks";};?></label>
                </div>
                <div class="col-75">
        <textarea id="subject" name="subject" placeholder="......" ><?php if(isset($_POST['submitEdit'])){echo $patient_remarks;}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) {
                require '../models/dbConnect.php';
                $queryClinic = "SELECT clinic_no FROM patient_clinic ORDER BY clinic_ID DESC LIMIT 1;";
                $resultClinic = mysqli_query($db, $queryClinic) or die(mysqli_error($db));

                //Fetch data from Database
                while ($rowClinic = mysqli_fetch_row($resultClinic)) {
                    $tableDataArrayClinic [] = $rowClinic;
                };
                $patient_IdClinic = $tableDataArrayClinic[0][0];
                //  echo ($patient_IdClinic + 1 );



                $queryClinicLastDate = "SELECT clinic_dateTime FROM patient_clinic ORDER BY clinic_ID DESC LIMIT 1;";
                $resultClinicLastDate = mysqli_query($db, $queryClinicLastDate) or die(mysqli_error($db));

                //Fetch data from Database
                while ($rowClinicLastDate = mysqli_fetch_row($resultClinicLastDate)) {
                    $tableDataArrayClinicLastDate [] = $rowClinicLastDate;
                };

                $patient_lastClinicDateTime = $tableDataArrayClinicLastDate[0][0];
                $lastDate =  substr($patient_lastClinicDateTime, 8, 2);
                //  echo $patient_lastClinicDateTime;
                //echo $lastDate;

                $today = date('d');
                // echo $today;
                if($today !== $lastDate){
                    echo "1";
                    mysqli_close($db);
                }
                else{
                    $queryClinicAssignLastDate = "SELECT clinic_no FROM patient_clinic ORDER BY clinic_ID DESC LIMIT 1;";
                    $resultClinicAssignLastDate = mysqli_query($db, $queryClinicAssignLastDate) or die(mysqli_error($db));
                    while ($rowClinicLastDate = mysqli_fetch_row($resultClinicAssignLastDate)) {
                        $tableDataArrayAssignClinicLastDate [] = $rowClinicLastDate;
                    };
                    $lastClinicNo = $tableDataArrayAssignClinicLastDate[0][0];
                    echo ($lastClinicNo + 1);
                }





            }; ?></textarea>

                    <div class="clinicRadio" id="clinicRadioId">
                        <ul>
                            <li style="margin-right: 20px">
                                <input type="radio" name="priority" class="gender" id="routine" value="routine" checked <?php if(isset($_POST['submitEdit'])){ if($patient_gender == 'male'){echo "checked";}}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) { if($patient_gender == 'male'){echo "checked";}}?> >
                                <label for="routine">Routine</label>
                            </li>
                            <li>
                                <input type="radio" name="priority"class="gender" id="staff"  value="staff/urgent" <?php if(isset($_POST['submitEdit'])){ if($patient_gender == 'female'){echo "checked";}}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_POST['submitAdd']))) { if($patient_gender == 'male'){echo "checked";}}?>?>
                                <label for="staff">Staff/Urgent</label>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

            <div class="mainSubmit">
                <input type="submit" value="Update Entry" id="mainSubmit" name="updateSubmit"  >
            </div>
            <div class="mainSubmitNew">
                <input type="submit" value="Add New Entry" id="mainSubmitNew" name="updateSubmitNew"  >
            </div>
            <div class="mainSubmitNewQueue">
                <input type="submit" value="Queue to Clinic" id="mainSubmitNewQueue" name="updateSubmitNewQueue" location.href = 'home.php';">
            </div>

        </div>
    </form>
</div>