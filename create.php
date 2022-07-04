<?php
 include('config.php');

 if(isset($_POST)){

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

      $query = $mysqli->query("INSERT INTO tbl_user VALUES(' ','$username','$password', '$userlevel', '$fname', '$mname', '$sname', '$bdate', '$gender', '$barangay', '$city', '$province', '$cnumber', '$email', '$dept', '$sss', '$tin', '$phil', ' ')");
      if ($query) {

        echo "<script> window.alert('Successfully Registered'); </script>
        <script>window.location='home.php';</script>";
      }else{
        echo "There was a problem";
      }
    }
?>