




<body id="homeBody">
<header id="searchHeader">
    <div id="headerImgDiv">
        <img src="../stylesheets/images/Header5.png">
    </div>
</header>
<section class="menu">
    <div class="outerContent">
        <div class="innerContent">
            <div id="menuOne">
                <a href="/Assesment/WebDevProject/Source Files/form.php" id="firstMenuA" class="styleView">
                    <h5>Registration</h5>
                    <hr>
                </a>
            </div>
            <div id="menuTwo">
                <a href="/Assesment/WebDevProject/Source Files/home.php" id="secondMenuA" class="styleReg">
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
<!--Search menu-->
<div id="searchAndTable" align="center">
    <div class="tableSearch" align="center">
        <div class="tableSearchInnerContainer">
            <form action="middleLayer.php" method="post" >
                <fieldset >
                    <legend align="left"> Sorted Search </legend>
                    <div id="searchPtNo" class="tableSearchInnerContainerGroup">
                        <label for="searchPtNoInput">Last Name:</label>
                        <div class="mySearchGroup">
                            <span class="icon"><img src="../stylesheets/images/search.png" style="margin:3px 0 0 38px"></span>
                            <input type="search"  id="searchPtNoInput" onfocusout="getContentInputFields(this.id)"  onfocus="inputSize(this.id)"  name="ptNoSearch" />
                        </div>
                    </div>
                    <div id="searchPtName" class="tableSearchInnerContainerGroup">
                        <label for="searchptNameInput">District:</label>
                        <div class="mySearchGroup">
                            <span class="icon" ><img src="../stylesheets/images/search.png" style="margin:3px 0 0 18px"></span>
                            <input type="search" id="searchptNameInput" onfocusout="getContentInputFields(this.id)" onfocus="inputSize(this.id)"  name="ptNameSearch" />
                        </div>
                    </div>
                    <div id="searchGender" class="tableSearchInnerContainerGroup" style="text-decoration: line-through">

                        <label for="gender">Gender:</label>
                        <ul >
                            <li id="genderMale" >
                                <input type="radio" name="gender" disabled class="gender" id="male" value="male"  <?php if(isset($_POST['submitEdit'])){ if($patient_gender == 'male'){echo "checked";}}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_GET['ptIdUpdate']))) { if($patient_gender == 'male'){echo "checked";}}?> >
                                <label for="male" style="text-decoration: line-through">Male</label>
                            </li >
                            <li id="genderFemale">
                                <input type="radio" name="gender"class="gender" id="female" disabled  value="female" <?php if(isset($_POST['submitEdit'])){ if($patient_gender == 'female'){echo "checked";}}elseif((isset($_POST['buttonQueueSubmit']))|| (isset($_GET['ptIdUpdate']))) { if($patient_gender == 'male'){echo "checked";}}?>?>
                                <label for="female" style="text-decoration: line-through" >Female</label>
                            </li>
                            <li id="genderOther" style="margin: -28px 0 0 14px;">
                                <input type="radio" name="gender"  class="gender" id="other" disabled value="other" <?php if(isset($_POST['submitEdit'])){ if($patient_gender == 'other'){echo "checked";}}elseif(isset(($_POST['buttonQueueSubmit']))|| (isset($_GET['ptIdUpdate']))) { if($patient_gender == 'male'){echo "checked";}}?>?>
                                <label for="other" style="text-decoration: line-through">Other</label>
                            </li>
                        </ul>
                    </div>
                </fieldset>
                <div id="searchPtId" class="tableSearchInnerContainerGroup" style="margin: 20px 0 0 155px">
                    <label for="searchPtAddressInput">Clinic No :</label>
                    <div class="mySearchGroup">
                        <span class="icon" ><img  id="idSearch" src="../stylesheets/images/search.png" "></span>
                        <input type="search" id="searchPtIdInput" onfocusout="getContentInputFields(this.id)" onfocus="inputSize(this.id)"  name="ptIDSearch" />
                    </div>
                </div>
                <div id="searchPtNic" class="tableSearchInnerContainerGroup" style="margin-top: 20px">
                    <label for="searchPtTellInput">NIC :</label>
                    <div class="mySearchGroup">
                        <span class="icon"><img src="../stylesheets/images/search.png"></span>
                        <input type="search" id="searchPtNicInput" onfocusout="getContentInputFields(this.id)" onfocus="inputSize(this.id)"  name="ptNicSearch" />
                    </div>
                </div>


            </form>
        </div>
    </div>
