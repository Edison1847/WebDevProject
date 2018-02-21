<?php
include '../models/config.php';
session_start();
if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==TRUE){
    header("Location:loggedin.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST") {


    $username = mysqli_real_escape_string($link,$_POST['username']);
    $password = mysqli_real_escape_string($link,$_POST['password']);

    $sql = "SELECT User_ID FROM user_info WHERE user_name = '$username' and user_password = '$password'";
    $result = mysqli_query($link, $sql);
    if (!$result)
        echo ("selection failed") . mysqli_error($link);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //echo $row['UserID'];
    // $user = $row['UserID'];

    $count = mysqli_num_rows($result);
    // echo $count;

    if($count == 1) {

        $_SESSION['loggedin'] = TRUE;
        //echo '<a href="http://localhost/clinicRegistration/form.html"> login</a>';
        header("location: form.php");
    }else {
        echo "Your Login Name or Password is invalid";
    }
}
?>