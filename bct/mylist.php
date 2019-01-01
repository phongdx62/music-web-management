<?php 
  session_start(); 
  include("views/v_link_css.php");
  include("models/m_music.php");
  $music = new music();
?>
<title>List nhạc</title>
<?php  
  include("views/v_header.php");
  include("views/v_mylist_content.php");
  include("views/v_mylist_body.php");
  include("views/v_footer.php");
?>