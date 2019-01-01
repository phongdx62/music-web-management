<?php 
  session_start(); 
  include("views/v_link_css.php");
  include("models/m_music.php");
  $music = new music();
?>
<title>Âm nhạc</title>
<?php 
  include("views/v_header.php");
  include("views/v_mylist_content.php");
  include("views/v_music_body.php");
  include("views/v_footer.php");
?>