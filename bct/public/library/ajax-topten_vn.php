<?php  
	include("../../models/m_music.php");
	$music = new music();
	$vn = "Việt Nam";
    $music->show_topten($vn);
?>