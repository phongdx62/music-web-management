<?php  
	include("../../models/m_music.php");
  	$music = new music(); 
	$sql = "SELECT id, num, song, sname, img, mp3 
			FROM music ms
			INNER JOIN singer sg
			ON ms.sid = sg.sid 
			ORDER BY num DESC LIMIT 8";
	$music->query($sql);                   
	include("ajax-show_album.php");
?>