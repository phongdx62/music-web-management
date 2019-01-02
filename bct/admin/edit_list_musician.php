<?php 
	session_start();
    if($_SESSION["level"] == 2)
    {
    	require("templates/header.php");
    	include("../models/m_musician.php");
		$mid = addslashes(stripslashes($_GET["mid"]));

		if(isset($_POST["ok"]))
		{
			$mname = addslashes(stripslashes($_POST["mname"]));
			$minfomation = addslashes(stripslashes($_POST["minfomation"]));
			$mimg = addslashes(stripslashes($_POST["mimg"]));
			
			if(isset($mname) && isset($minfomation) && isset($mimg))
			{
				$musician = new musician();
				$musician->m_edit_musician($mid, $mname, $minfomation, $mimg);
				$musician->disconnect();
				ob_start();
				header('Location: list_musician.php');
				ob_end_flush();
			}
		}

		$musician = new musician();
		$row = $musician->m_get_musician($mid);

    }
	else
	{		
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}					   								  	
	
	require("templates/table_edit_musician.php"); 
	$musician->disconnect();
	require("templates/footer.php");
?>