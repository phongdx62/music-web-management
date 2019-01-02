<?php 
  session_start(); 
  include('public/library/link_css.php');
  include("models/m_music.php");
  $music = new music();
?>
<title>Âm nhạc</title>
<?php 
  include("views/v_header.php");
  include("views/v_mylist_music_1.php");
  include("controllers/c_music.php");
  include("views/v_mylist_music_2.php");
  include("views/v_footer.php");
?>