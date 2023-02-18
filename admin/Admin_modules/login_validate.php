<?php 
include '../Admin_config/connection.php';
include '../Admin_controllers/login.php';

if(isset($_POST['submit'])){

	$username = $_POST['mail'];
	$password = md5($_POST['pass']);

	$result = VALIDATE($username,$password);

	if(!empty($result))
	{
		session_start();
		$_SESSION=$result;
		header('Location: ../views/index.php');
	}else {
		echo '<script type="text/javascript">alert ("Invalid Credentials");';
		echo 'window.location.href = "../views/login.php?wrong_credentials";';
		echo '</script>';
	}

}

if(isset($_POST['forget'])){
	$username = $_POST['username'];

	$result = CHECK_USER($username);

	if ($result['adm_username'] == $username) 
	{
		header('Location: ../views/resetpassword.php?user='.$username);
	}
	else
	{
		echo '<script type="text/javascript">alert ("User does not exist");';
		echo 'window.location.href = "../views/forgot-password.php?user_not_verified";';
		echo '</script>';
	}

}

if(isset($_POST['reset'])){
	$username = $_POST['user'];
	$new = md5($_POST['new']);
	$confirm = md5($_POST['confirm']);

	if ($new != $confirm) {
		echo '<script type="text/javascript">alert ("Passwords did not match");';
		echo 'window.history.back();';
		echo '</script>';
	}else{
		$res = FORGET_PASS($username,$new);
	}
}

?>