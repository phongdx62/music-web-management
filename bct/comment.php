<?php 
  session_start(); 
  include("views/v_link_css.php");
  include("models/m_music.php");
  $music = new music();
?>
<title>Âm nhạc</title>
<?php 
  include("views/v_header.php");
  include("views/v_comment.php");
  include("views/v_footer.php");
?>