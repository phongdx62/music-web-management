<?php 
	include("../models/m_musician.php");
	$mid = addslashes(stripslashes($_GET["mid"]));
	$musician = new musician();
	$musician->m_del_singer($mid);
	$musician->disconnect();
	ob_start(); 
	header('Location: list_singer.php');
	ob_end_flush(); 
?>