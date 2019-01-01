<?php  
	include("../../models/m_music.php");
	$music = new music();
	$hq = "Hàn Quốc";
    $music->show_topten($hq);
?>