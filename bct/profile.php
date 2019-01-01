<?php 
  session_start(); 
  include("models/m_user.php");
  include("views/v_link_css.php");
?>   
<title>Trang cá nhân</title>
<?php 
  include("views/v_header.php");
  include("views/v_profile_body.php");
  include("views/v_profile_content.php");
  include("views/v_footer.php");
?>