<?php  
	include("models/m_user.php");
	class M_login 
	{
		public function login()
		{
			if(isset($_POST['ok']))
			{
				$u = addslashes(stripslashes($_POST['user']));
				$p = addslashes(stripslashes($_POST['pass']));
				if(isset($u) && isset($p))
				{
					require("../models/m_user.php");
					$user = new user();
					$user->set_name($u);
					$user->set_pass($p);
					if($user->m_login() == 'fail')
					{
						$err = "<p style='color: red;'>* Bạn nhập sai tài khoản hoặc mật khẩu</p>";
					}
					else
					{
						if($_SESSION['level'] == 2)
						{
							ob_start(); 
							header('Location: ../admin/admin.php');
							ob_end_flush();
						}
						else
						{
							ob_start(); 
							header('Location: ../index.php');
							ob_end_flush();
						}
					}
					$user->disconnect();
				}
			}									    
		}
	}
?>