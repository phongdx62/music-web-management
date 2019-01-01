<?php
	session_start();
    if($_SESSION["level"] == 2)
    {
    	require("templates/header.php");
		if(isset($_POST["ok"]))	
		{
			//stripslashes loại bỏ ký tự \ trước dấu '
			$mname = addslashes(stripslashes($_POST["mname"]));
			$minfomation = addslashes(stripslashes($_POST["minfomation"]));
			$mimg = addslashes(stripslashes($_POST["mimg"]));
			
			if(isset($mname) && isset($minfomation) && isset($mimg))
			{
				include("../models/m_musician.php");
				$musician = new musician();
				$result = $musician->m_add_musician($mname, $minfomation, $mimg);	
				if($result == 'fail')
				{
					$err = "* Tên ca sĩ đã tồn tại";					
				}
				else
				{
					$err = "* Thêm thông tin nhạc sĩ thành công";
				}
				$musician->disconnect();			
			}
		}	
    } 
	else
	{
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}
	
	require("templates/table_add_musician.php");
?>	
	
	<div style="width: 500px; margin: 30px; text-align: center; color: red;">
		<?php
			if (isset($err)) 
			{
			  	echo $err;
			}  
		?>
	</div>

<?php  
	require("templates/footer.php");
?>
