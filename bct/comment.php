<?php 
  session_start(); 
  include('public/library/link_css.php');
  include("models/m_music.php");
  $music = new music();
?>
<title>Âm nhạc</title>
<?php 
  include("views/v_header.php");
  include("controllers/c_comment.php");
  include("views/v_footer.php");
?>