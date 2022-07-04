<?php 
include("config.php");

if(isset($_POST['submit'])){

	$username = $_POST['username'];
    $password = $_POST['password'];
    
		$sql = "SELECT * FROM tbl_user WHERE fld_username='$username' and fld_password='$password'";
		$result = mysqli_query($mysqli,$sql);

		if (mysqli_num_rows($result)>0) {
			$logged_in_user = mysqli_fetch_assoc($result);
			// $password_verify = password_verify($password, $logged_in_user['fld_password']);

			if ($logged_in_user['fld_userlevel'] == 'Admin'){
				$sql= "SELECT * FROM tbl_user WHERE fld_username='$username' and fld_password='$password'";
				$result1=mysqli_query($mysqli,$sql);
				
				
				header("location: home.php");
			}elseif ($logged_in_user['fld_userlevel'] == 'User'){
				$sql11= "SELECT * FROM tbl_user WHERE fld_username='$username' and fld_password='$password'";
				$result11=mysqli_query($mysqli,$sql11);
				
				if(mysqli_num_rows($result11)>0){
					while($row2=mysqli_fetch_array($result11)){
						session_start();
						$_SESSION['id']=$row2['id'];
						$_SESSION['fld_fname']=$row2['fld_fname'];
						$_SESSION['fld_sname']=$row['fld_sname'];
					}
				}

				header("location: user-home.php");
			}elseif ($logged_in_user['fld_userlevel'] == 'ACCOUNT DISABLED'){
				echo "<script> window.alert('Your Account is disabled by the Administrator'); </script>
				<script>window.location='index.php';</script>";
			}
		}else{
			echo "<script> window.alert('Invalid Username/Password'); </script>
				<script>window.location='index.php';</script>";
		}
	}
?>