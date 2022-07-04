<?php 
include('config.php');
session_start(); 
$userid=$_SESSION['user_id'];
$ses_name = $_SESSION['fld_fname'];
$ses_sname = $_SESSION['fld_sname'];
$ses_division = $_SESSION['fld_division'];
 
$userq=mysqli_query($mysqli,"SELECT * FROM tbl_users WHERE user_id='$userid'");
$userrow=mysqli_fetch_array($userq);

$getname=mysqli_query($mysqli,"SELECT * FROM tbl_users WHERE fld_division = '$ses_division' ");
$user_name=mysqli_fetch_array($getname);
?>