<?php 
	if(isset($_POST["ok"]))
	{
		$f = addslashes(stripslashes($_POST["fname"]));
		$l = addslashes(stripslashes($_POST["lname"]));
		$u = addslashes(stripslashes($_POST["user"]));
		$e = addslashes(stripslashes($_POST["email"]));
		$p = md5(addslashes(stripslashes($_POST["pass"])));

		$pattern = '/^.{8,25}$/';
	}

	if(isset($f) && isset($l) && isset($u) && isset($e) && isset($p))
	{	
		if(preg_match($pattern, $_POST["pass"]))
		{
			if($p != md5($_POST["re_pass"]))
			{
				$msg = "<p style='color: red;'>* Bạn nhập lại mật khẩu không đúng</p>";
			}
	  		else
	  		{
	  			require("./models/m_user.php");
	  			$base_url='localhost/bct/public/library/';
	         	$activation=md5($e.time());

				$user = new user();
				$user->set_fname($f);
				$user->set_lname($l);
				$user->set_email($e);
				$user->set_name($u);
				$user->set_pass($p);
				$register = $user->m_register($activation);
				if($register == 'fail')
				{
					$msg = "<p style='color: red;'>* Tài khoản đã tồn tại</p>";
				}
				else
				{
					//Soạn mail
	         		include('./public/library/send_mail.php');
	         		include('./public/library/class.phpmailer.php');
	         		include('./public/library/class.smtp.php');

	         		$title = 'Thư xác nhận';
				    $content = 'Hi, <br/> <br/> Chúng tôi cần đảm bảo bạn là con người. Vui lòng bấm vào đường dẫn dưới đây để hoàn tất việc đăng ký thành viên:
		. <br/> <br/> <a href="'.$base_url.'activation.php'.'?code='.$activation.'">'.$base_url.'activation.php'.'?code='.$activation.'</a>';
				    $nTo = $u;
				    $mTo = $e;

			        //Gửi mail     
				    $mail = send_mail($title, $content, $nTo, $mTo);
				    if($mail==1)
				    	$msg = "<p style='color: #C71585;'>Một email đã được gửi đến hòm thư $e của bạn.</p><br />
				    			<p style='color: #C71585;'>Hãy vào mail và làm theo hướng dẫn để kich hoạt tài khoản.</p>";
				    else 
			    		$msg = "<p style='color: red;'>* Có lỗi</p>";
				}
				$user->disconnect();								
		  	}	  				
		}
		else
		{
			$msg = "<p style='color: red;'>* Mật khẩu phải có độ dài từ 8 đến 25 kí tự !</p>";
		}
	  									    
	}			 		
?>
