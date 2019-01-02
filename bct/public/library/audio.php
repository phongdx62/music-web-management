<script src="public/core/js/audioplayerengine/jquery.js"></script>
    <script src="public/core/js/audioplayerengine/amazingaudioplayer.js"></script>
    <link rel="stylesheet" type="text/css" href="public/core/js/audioplayerengine/initaudioplayer-2.css">
    <script src="public/core/js/audioplayerengine/initaudioplayer-2.js"></script>
	<div style="margin:28px auto;">  
	    <div id="amazingaudioplayer-2" style="display:block;position:relative;width:100%;max-width:400px;height:400px;margin:0px auto 0px;">
	        <ul class="amazingaudioplayer-audios" style="display:none;">
	            <li data-artist="<?php echo $data['sname']; ?> - " data-title="Bài hát: <?php echo $data['song'] ?>" data-album="<?php echo $data['song'] ?>" data-info="Music play for life" data-image="public/core/<?php echo $data['img']; ?>" data-duration="248">
	                <div class="amazingaudioplayer-source" data-src="public/core/<?php echo $data['mp3']; ?>" data-type="audio/mpeg" ></div>
	            </li>
	        </ul>
	        <div class="amazingaudioplayer-engine"><a href="http://amazingaudioplayer.com" title="jquery mp3 player">music play for life</a></div>
	    </div>
    </div>