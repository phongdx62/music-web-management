<?php  
	include("../../models/m_music.php");
	$music = new music();
	$aumy = "Âu Mỹ";
    $music->show_topten($aumy);
?>