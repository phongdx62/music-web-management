	<title>artist</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/core/css/style-artist.css">
</head>
<body>
	  
    <div class="body">
	    <div class="content">
	    	<?php  
	    		include("models/m_singer.php");
	    		$singer = new singer();
	    		$sql = "SELECT sid, sname, simg, votelike FROM singer";
	    		$singer->query($sql);
	    		while ($data = $singer->fetch_assoc()) 
	    		{
	    			echo"<div class='box'>";
				        echo"<div class='avatar'>";
				          echo"<img src='public/core/$data[simg]'>";
				        echo"</div>";
				        echo"<a href='music.php?sid=$data[sid]' id='ssong'><div class='singer'>$data[sname]</div></a>";
				        echo"<div class='name'>$data[votelike]</div>";
				    echo"</div>";
	    		}
	    	?>
	    </div>
    </div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- <script src="./public/core/js/jquery-3.3.1.slim.min.js"></script>
	<script>
		$(document).ready(function() {
	        $('#ssong').click(function(e) {
	            e.preventDefault();
	            $.post('public/library/ajax-song_singer.php', {
	                singer: $data['sname']
	                
	            },function(ketqua) {
	                $('.content').html(ketqua);
	            });
	            
	        });
	    });
	</script> -->