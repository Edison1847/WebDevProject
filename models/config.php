<?php
$link=mysqli_connect("localhost","root","");
if(!$link)
    die("no connection");
$db=mysqli_select_db($link,"pt_reg_db");
if(!$db){
    die("db selection failed");
}
?>