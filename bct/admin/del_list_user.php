<?php 
	include("../models/m_user.php");
	$uid = addslashes(stripslashes($_GET["uid"]));
	$user = new user();
	$user->m_del_user($uid);
	$user->disconnect();
	ob_start(); 
	header('Location: list_user.php');
	ob_end_flush(); 
?>