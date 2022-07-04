<?php
   include("config.php");

   if(isset($_POST)){
   
    $id= $_POST["id"];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userlevel = $_POST['userlevel'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $sname = $_POST['lastname'];
    $bdate = $_POST['bdate'];
    $gender = $_POST['gender'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $province= $_POST['province'];
    $cnumber = $_POST['cnumber'];
    $email = $_POST['email'];
    $dept = $_POST['dept'];
    $sss = $_POST['sssnum'];
    $tin = $_POST['tinnum'];
    $phil = $_POST['philnum'];

    $uptest = $mysqli->query("UPDATE tbl_user SET fld_username='$username', fld_password='$password', fld_userlevel='$userlevel', fld_fname='$fname', fld_mname='$mname', fld_sname='$sname', fld_bdate='$bdate', fld_gender='$gender', fld_barangay='$barangay', fld_city='$city', fld_province='$province', fld_cnumber='$cnumber', fld_email='$email', fld_dept='$dept', fld_sss='$sss', fld_tin='$tin', fld_phil='$phil' WHERE id = '$id' ");

    if ($uptest) {
      echo "<script> window.alert('Successfully Updated'); </script>
      <script>window.location='user-home.php';</script>";
    }else{
       echo "There was a problem";
    }
  
 
 }
?>