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
	        include("public/library/audio.php");
	    }
	    
	    if(isset($_SESSION["name"]) && isset($_GET['id']))
		{
			$id = $_GET["id"];
			$name = $_SESSION["name"];
			if(isset($_REQUEST["cm"]))
			{
				$msg = $_POST["content"];
				$sql = "SELECT uid, username FROM user  
						WHERE username = '$name' ";
				
				$music->query($sql);
				$data = $music->fetch_assoc();
				$uid = $data["uid"];

				$sql = "INSERT INTO comment (uid, msg, id) VALUES ('$uid', '$msg', '$id')";
				$kq = mysqli_query($conn, $sql);
			}		
        	include("public/library/comment_form.php");
        	$sql = "SELECT msg, username FROM comment cm
					INNER JOIN user us
					ON cm.uid = us.uid
					WHERE cm.id = $id";
			$music->query($sql);
			
			while ($data = $music->fetch_assoc()) 
			{
				include("public/library/comment_old.php");
			}
		}
		else
		{
			include("views/v_comment.php");
		}
	}
	
?>	