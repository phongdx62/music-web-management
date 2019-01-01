<?php
	session_start();
    if($_SESSION["level"] == 2)
    {
    	require("templates/header.php");
		if(isset($_POST["ok"]))	
		{
			//stripslashes loại bỏ ký tự \ trước dấu '
			$sname = addslashes(stripslashes($_POST["sname"]));
			$sinfomation = addslashes(stripslashes($_POST["sinfomation"]));
			$simg = addslashes(stripslashes($_POST["simg"]));
			
			if(isset($sname) && isset($sinfomation) && isset($simg))
			{
				include("../models/m_singer.php");
				$singer = new singer();
				$result = $singer->m_add_singer($sname, $sinfomation, $simg);	
				if($result == 'fail')
				{
					$err = "* Tên ca sĩ đã tồn tại";					
				}
				else
				{
					$err = "* Thêm thông tin ca sĩ thành công";
				}
				$singer->disconnect();			
			}
		}	
    } 
	else
	{
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}
	
	require("templates/table_add_singer.php");
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
