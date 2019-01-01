<?php 
  session_start();
  include("views/v_link_css.php"); 
  include("views/v_header.php");
  include("views/v_index_content.php");
  include("models/m_music.php");
  $music = new music();
?>
<title>Trang chủ | homangtrang.net</title>
<?php
  if (isset($_REQUEST['ok'])) 
  {
    include("views/v_index_search.php");
  }
  else
  {
    include("views/v_index_album.php");
    include("views/v_index_best.php");
    include("views/v_index_topten.php");
  }
  include("views/v_footer.php");
?>      