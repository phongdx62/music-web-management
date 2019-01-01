<?php  
	include("models/m_user.php");
	class M_register 
	{
		public function register()
		{
			if(isset($_POST["ok"]))
			{
				$f = addslashes(stripslashes($_POST["fname"]));
				$l = addslashes(stripslashes($_POST["lname"]));
				$u = addslashes(stripslashes($_POST["user"]));
				$e = addslashes(stripslashes($_POST["email"]));
				$p = addslashes(stripslashes($_POST["pass"]));
			}

			if(isset($f) && isset($l) && isset($u) && isset($e) && isset($p))
			{	
			  	if($p != $_POST["re_pass"])
				{
					$msg = "<p style='color: red;'>* Bạn nhập lại mật khẩu không đúng</p>";
				}
				else
				{
					$this->add_user($f,$l,$u,$e,$p);	
				}								
			}	  												    
		}
		

		public function add_user($f,$l,$u,$e,$p)
		{
 			$user = new user();
			$user->set_fname($f);
			$user->set_lname($l);
			$user->set_email($e);
			$user->set_name($u);
			$user->set_pass($p);
			$register = $user->m_register();
			if($register == 'fail')
			{
				$msg = "<p style='color: red;'>* Tài khoản đã tồn tại</p>";
			}
			else
			{
				$msg = "<p style='color: blue;'>* Đăng kí thành công, <a href='./login.php' style='color: #FF00FF'>Đăng nhập</a> để vào website<br /></p>";
			}											
		}
	}
?>