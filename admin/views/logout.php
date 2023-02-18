<?php

session_start();

if (isset($_GET['logout'])) 
{
	session_destroy();
	header("Location: index.php?logged_out");	
}

?>