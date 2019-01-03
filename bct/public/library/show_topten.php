<?php  
	echo"<div class='bai-hat-tuan'>";
		        echo"<div class='number'>$data[topten]</div>";
		        echo"<div class='info'>";
		          echo"<div class='title'><a id='id-name' href='comment.php?id= $data[id]'>$data[song]</a></div>";
		          echo"<div class='singer mb-2'><a id='id-singer' href='music.php?id= $data[id]'>$data[sname]</a></div>";
		        echo"</div>";
		      echo"</div>";
?>