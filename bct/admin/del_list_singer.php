<?php 
	include("../models/m_singer.php");
	$sid = addslashes(stripslashes($_GET["sid"]));
	$singer = new singer();
	$singer->m_del_singer($sid);
	$singer->disconnect();
	ob_start(); 
	header('Location: list_singer.php');
	ob_end_flush(); 
?>