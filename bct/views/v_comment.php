<?php 
	if (isset($_REQUEST['ok'])) 
	{      
		include("mylist_content.php");        
	    $key = addslashes($_POST['key']);

	    if (empty($key)) 
	    {
	      echo "<p style= 'color:red;'>* Dữ liệu tìm kiếm không được để trống</p>";
	    } 
	    else
	    {
	      $music->m_search($key);
	    }
?>
			     </ul>
		        <div class="force-overflow"></div>
		      </div>
		    </div>
		    <div class="col-sm-3">
		      
		    </div>
		  </div>
		  </div>
		  <div style="height: 20px; width: 100%"></div>    
		</div>
	<?php	
	}
	else
	{
		if(!empty($_GET['id']) && isset($_GET['id']))
	    {
	        $id = addslashes($_GET['id']);

	        $sql = "SELECT id, song, sname, img, mp3 
	        		FROM music ms
	        		INNER JOIN singer sg 
	        		ON ms.sid = sg.sid
	        		WHERE id = '". $id ."'";
	        $music->query($sql);
	        $data = $music->fetch_assoc();
	        $singer = "<p style='color: red;'>$data[sname] </p>";
	        $song = "<p style='color: red;'>$data[song] </p>";
	             
	?>
	    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	    <meta name="viewport" content="width=device-width">
	      
	    <div style="margin:12px auto;">
	    
	    <div id="amazingaudioplayer-1" style="display:block;position:relative;width:100%;max-width:510px;height:auto;margin:0px auto 0px;">
	        <ul class="amazingaudioplayer-audios" style="display:none;">
	            <li data-artist="<?php echo $singer; ?>" data-title="<?php echo $song; ?>" data-album="MUSIC-LIVE" data-info="homangtrang.net" data-image="public/core/<?php echo $data['img']; ?>" data-duration="209">
	                <div class="amazingaudioplayer-source" data-src="public/core/<?php echo $data['mp3']; ?>" data-type="audio/mpeg" ></div>
	                <div class="amazingaudioplayer-source" data-src="public/core/<?php echo $data['mp3']; ?>" data-type="audio/ogg" ></div>
	            </li>
	        </ul>
	        <div class="amazingaudioplayer-engine"><a href="#" title="mp3 player for website">music player for website</a></div>
	    </div>
	    
	<?php
		}  
		$conn = mysqli_connect("localhost", "root", "", "music_web_management") or die ("error");
		mysqli_set_charset($conn,"utf8");

		if(isset($_SESSION["name"]) && isset($_GET['id']))
		{
			$id = $_GET["id"];
			$name = $_SESSION["name"];
			if(isset($_REQUEST["cm"]))
			{
				$msg = $_POST["content"];
				$sql = "SELECT uid, username FROM user  
						WHERE username = '$name' ";
				
				$kq = mysqli_query($conn, $sql);
				$data = mysqli_fetch_assoc($kq);
				$uid = $data["uid"];

				$sql = "INSERT INTO comment (uid, msg, id) VALUES ('$uid', '$msg', '$id')";
				$kq = mysqli_query($conn, $sql);
			}		

		?>
		

			<link rel="stylesheet" href="public/core/css/style-comment.css">

				<fieldset style="width: 500px; margin-left: 20px;">
					<legend>Binh luan</legend>
					<form action="" method="post">
						<table>
							<tr>
								<td></td>
								<td><textarea class="com-mess" name="content"  cols="30" rows="10" ></textarea></td>
							</tr>
							<tr>
								<td></td>
								
							</tr>
							<tr>
								<td></td>
								<td><input class="com-submit" type="submit" value="Gui" name="cm"></td>
							</tr>
						</table>
					</form>
				</fieldset>

		

		<?php
			$sql = "SELECT msg, username FROM comment cm
					INNER JOIN user us
					ON cm.uid = us.uid";
			$kq = mysqli_query($conn, $sql);
			
			while ($data = mysqli_fetch_assoc($kq)) 
			{
		?>
			<fieldset style="width: 500px; margin-left: 20px; padding: 0 0 8px 2px;">
				<legend></legend>
				<ul>			
					<li>
						<img src="./public/core/image/loveuself.jpg" width="52" >
						<div>
							<b><?php echo $data['username']; ?></b><small>&nbsp; 30/12/2018 &nbsp;<a href="#">tra loi</a></small>
							<p><?php echo $data['msg']; ?></p>
						</div>
					</li>
				</ul>
			</fieldset>
	<?php
			}
		}
		else	
		{
			
		} 	
	}
?> 	    