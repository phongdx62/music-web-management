<?php 
  include("../../models/m_music.php");
  $music = new music(); 
	$sql = "SELECT id, new, song, sname, img, mp3 
			FROM music ms
			INNER JOIN singer sg
			ON ms.sid = sg.sid 
			WHERE new = '1'";
  $music->query($sql);                   
  include("ajax-show_album.php");
?>