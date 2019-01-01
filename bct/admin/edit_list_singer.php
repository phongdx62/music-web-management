<?php 
	session_start();
    if($_SESSION["level"] == 2)
    {
    	require("templates/header.php");
    	include("../models/m_singer.php");
		$sid = addslashes(stripslashes($_GET["sid"]));

		if(isset($_POST["ok"]))
		{
			$sname = addslashes(stripslashes($_POST["sname"]));
			$sinfomation = addslashes(stripslashes($_POST["sinfomation"]));
			$simg = addslashes(stripslashes($_POST["simg"]));
			
			if(isset($sname) && isset($infomation) && isset($simg))
			{
				$singer = new singer();
				$singer->m_edit_singer($sid, $sname, $sinfomation, $simg);
				$singer->disconnect();
				ob_start();
				header('Location: list_singer.php');
				ob_end_flush();
			}
		}

		$singer = new singer();
		$row = $singer->m_get_singer($sid);

    }
	else
	{		
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}					   								  	
	
	require("templates/table_edit_singer.php"); 
	$singer->disconnect();
	require("templates/footer.php");
?>