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
	<script src="public/core/js/audioplayerengine/jquery.js"></script>
    <script src="public/core/js/audioplayerengine/amazingaudioplayer.js"></script>
    <link rel="stylesheet" type="text/css" href="public/core/js/audioplayerengine/initaudioplayer-2.css">
    <script src="public/core/js/audioplayerengine/initaudioplayer-2.js"></script>
	<div style="margin:28px auto;">  
	    <div id="amazingaudioplayer-2" style="display:block;position:relative;width:100%;max-width:400px;height:800px;margin:0px auto 0px;">
	        <ul class="amazingaudioplayer-audios" style="display:none;">
	            <li data-artist="<?php echo $data['sname']; ?> - " data-title="Bài hát: <?php echo $data['song'] ?>" data-album="<?php echo $data['song'] ?>" data-info="Music play for life" data-image="public/core/<?php echo $data['img']; ?>" data-duration="248">
	                <div class="amazingaudioplayer-source" data-src="public/core/<?php echo $data['mp3']; ?>" data-type="audio/mpeg" ></div>
	            </li>
	        </ul>
	        <div class="amazingaudioplayer-engine"><a href="http://amazingaudioplayer.com" title="jquery mp3 player">music play for life</a></div>
	    </div>
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
					<legend>Bình luận</legend>
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
								<td><input class="com-submit" type="submit" value="Gửi" name="cm"></td>
							</tr>
						</table>
					</form>
				</fieldset>

		

		<?php
			$sql = "SELECT msg, username FROM comment cm
					INNER JOIN user us
					ON cm.uid = us.uid
					WHERE cm.id = $id";
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
							<b><?php echo $data['username']; ?></b><small>&nbsp; 30/12/2018 &nbsp;<a href="#">trả lời</a></small>
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