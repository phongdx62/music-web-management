<?php  
	include("database.php");
	class singer extends database
	{
		public function __construct()
		{
			$this->connect();
		}

		public function m_list_singer()
		{
			$sql = "SELECT * FROM singer";
			$this->query($sql);
			while ($row = $this->fetch_assoc()) 
			{
				require("templates/show_singer.php");
			}
		}

		public function m_search_singer($key)
		{
			$sql = "SELECT * FROM singer 
					WHERE sid LIKE '%$key%' OR sname LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("templates/table_singer.php");
                $stt=1;
                while ($row = $this->fetch_assoc()) 
                {
                    require("templates/show_singer.php");
                    $stt++;         
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_edit_singer($sid, $sname, $sinfomation, $simg)
		{
			$sql = "UPDATE singer SET sname = '$sname', 
									  sinfomation = '$sinfomation', 
									  simg = '$simg'  						 
								  WHERE sid = $sid";
			$this->query($sql);
		}

		public function m_get_singer($sid)
		{
			$sql = "SELECT * FROM singer WHERE sid = $sid ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}

		public function m_add_singer($sname, $sinfomation, $simg)
		{
			$sql = "SELECT sid FROM singer WHERE sname = '$sname'";
			$this->query($sql);

			$num = $this->num_rows();
			if($num>0)
			{
				return 'fail';
			}
			else
			{
				$sql = "INSERT INTO singer(sname,
										   sinfomation,
										   simg)  VALUES	
										  ('$sname',
										   '$sinfomation',
										   '$simg')";
				$this->query($sql);
			}
		}

		public function m_del_singer($sid)
		{
			$sql = "DELETE FROM singer WHERE sid = $sid";
			$this->query($sql);
		}
	}
?>