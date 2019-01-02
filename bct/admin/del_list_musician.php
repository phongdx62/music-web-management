<?php 
	include("../models/m_musician.php");
	$mid = addslashes(stripslashes($_GET["mid"]));
	$musician = new musician();
	$musician->m_del_musician($mid);
	$musician->disconnect();
	ob_start(); 
	header('Location: list_musician.php');
	ob_end_flush(); 
?>