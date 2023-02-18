<?php 

error_reporting(0);

function VALIDATE($username,$password){
	include '../Admin_config/connection.php';
	$sql= "SELECT * FROM `tb_admin` WHERE `adm_username`='$username' AND `adm_password`='$password' AND `adm_status`='Active'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if ($count==1) {
		$admin_data=mysqli_fetch_assoc($result);
	    $res = $admin_data;
	} 

	return($res);
}

function CHECK_USER($username){
	include '../Admin_config/connection.php';
	$sql= "SELECT `adm_username` FROM `tb_admin` WHERE `adm_username`='$username' AND `adm_status`='Active'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if ($count==1) {
		$admin_data=mysqli_fetch_assoc($result);
	    $res = $admin_data;
	} 

	return($res);
}

function FORGET_PASS($admin,$newpass){
 	include '../Admin_config/connection.php';

  	$sql= "UPDATE `tb_admin` SET `adm_password`='$newpass' WHERE `adm_username` = '$admin'";
  	$result=mysqli_query($conn,$sql);

	if ($result){
		echo '<script type="text/javascript">alert("Password Changed Successfully");';
		echo 'window.location.href = "../views/login.php?password_changed";';
		echo '</script>';
	}else{
		echo '<script type="text/javascript">alert("Error Updating Password");';
		echo 'window.location.href = "../views/resetpassword.php?error";';
		echo '</script>';
	}
 }

 ?>