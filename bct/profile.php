<?php 
  session_start(); 
  include("models/m_user.php");
  include('public/library/link_css.php');
?>   
<title>Trang cá nhân</title>
<?php 
  include("views/v_header.php");
  include("controllers/c_profile.php");
  include("views/v_profile.php");
  include("views/v_footer.php");
?>