<?php
require("../../models/m_user.php");
$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{
   $code=addslashes(stripslashes($_GET['code']));

   $sql = "SELECT uid FROM user WHERE activation='$code'";
   $user = new user();
   $user->query($sql);
   $num = $user->num_rows();
   if($num > 0)
   {
      $sql = "SELECT uid FROM user WHERE activation='$code' and status='0'";
      $user->query($sql);

      if($user->num_rows() == 1)
      {
         $sql = "UPDATE user SET status='1', activation = NULL WHERE activation='$code'" or die ("câu truy vấn sai");
         $user->query($sql);
         $msg = "<p style='color: blue;'>* Đăng kí thành công, <a href='../../login.php' style='color: #FF00FF'>Đăng nhập</a> để vào website<br /></p>"; 
      }
      else
      {
         $msg ="Tài khoản của bạn đã hoạt động, không cần kích hoạt lại";
      }
      $user->disconnect();
   }
   else
   {
      $msg ="Mã kích hoạt sai.";
   }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>PHP Email Verification Script</title>
<link rel="stylesheet" href="<?php echo $base_url; ?>style.css"/>
</head>
<body>
   <div id="main">
   <h2><?php echo $msg; ?></h2>
   </div>
</body>
</html>
