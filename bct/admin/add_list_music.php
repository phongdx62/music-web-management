<?php
	session_start();
    if($_SESSION["level"] == 2)
    {
    	require("templates/header.php");

		$err = array();
		$err["add"] = NULL;

		if(isset($_POST["ok"]))	
		{
			//stripslashes loại bỏ ký tự \ trước dấu '
			$song = addslashes(stripslashes($_POST["song"]));
			$singer = addslashes(stripslashes($_POST["singer"]));
			$musician = addslashes(stripslashes($_POST["musician"]));
			$country = addslashes(stripslashes($_POST["country"]));
			$style = addslashes(stripslashes($_POST["style"]));
			$new = addslashes(stripslashes($_POST["new"]));
			$best = addslashes(stripslashes($_POST["best"]));
			$topten = addslashes(stripslashes($_POST["topten"]));
			$img = addslashes(stripslashes($_POST["img"]));
			$mp3 = addslashes(stripslashes($_POST["mp3"]));
			
			if(isset($song) && isset($singer) && isset($musician) && isset($country) && isset($style) && isset($new) && isset($best) && isset($topten) && isset($img)&& isset($mp3))
			{
				include("../models/m_music.php");
				$music = new music();
				if($music->check_sname($singer)=='fail' || $music->check_mname($musician)=='fail')
				{
					$err["add"] = "* Tên ca sĩ hoặc nhạc sĩ không có trong cơ sở dữ liệu";
				}
				else
				{
					$sid = $music->get_sid($singer);
					$mid = $music->get_mid($musician);
					$result = $music->m_add_music($song, $sid, $mid, $country, $style, $new, $best, $topten, $img, $mp3);	
					if($result == 'fail')
					{
						$err["add"] = "* Tên bài hát đã tồn tại";					
					}
					else
					{
						$err["add"] = "* Thêm bài hát thành công";
					}
					$music->disconnect();
				}
			}
		}	
    } 
	else
	{
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}
	
	require("templates/table_add_music.php");
?>	
	
	<div style="width: 500px; margin: 30px; text-align: center; color: red;">
		<?php  
			echo $err["add"];
		?>
	</div>

<?php  
	require("templates/footer.php");
?>
