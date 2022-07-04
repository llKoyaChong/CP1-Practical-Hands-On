<?php 
include('config.php');
session_start(); 
$id=$_SESSION['id'];
$ses_name = $_SESSION['fld_fname'];
$ses_sname = $_SESSION['fld_sname'];
 
$userq=mysqli_query($mysqli,"SELECT * FROM tbl_user WHERE id='$id'");
$userrow=mysqli_fetch_array($userq);
?>