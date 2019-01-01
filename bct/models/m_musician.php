<?php  
	include("database.php");
	class musician extends database
	{
		public function __construct()
		{
			$this->connect();
		}

		public function m_list_musician()
		{
			$sql = "SELECT * FROM musician";
			$this->query($sql);
			while ($row = $this->fetch_assoc()) 
			{
				require("templates/show_musician.php");
			}
		}

		public function m_search_musician($key)
		{
			$sql = "SELECT * FROM musician 
					WHERE mid LIKE '%$key%' OR mname LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("templates/table_musician.php");
                $stt=1;
                while ($row = $this->fetch_assoc()) 
                {
                    require("templates/show_musician.php");
                    $stt++;         
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_edit_musician($mid, $mname, $minfomation, $mimg)
		{
			$sql = "UPDATE musician SET mname = '$mname', 
									    minfomation = '$minfomation', 
									    mimg = '$mimg'  						 
								    WHERE mid = $mid";
			$this->query($sql);
		}

		public function m_get_musician($mid)
		{
			$sql = "SELECT * FROM musician WHERE mid = $mid ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}

		public function m_add_musician($mname, $minfomation, $mimg)
		{
			$sql = "SELECT mid FROM musician WHERE mname = '$mname'";
			$this->query($sql);

			$num = $this->num_rows();
			if($num>0)
			{
				return 'fail';
			}
			else
			{
				$sql = "INSERT INTO musician(mname,
										   	 minfomation,
										   	 mimg)   VALUES	
										   ('$mname',
										    '$minfomation',
										    '$mimg')";
				$this->query($sql);
			}
		}

		public function m_del_musician($mid)
		{
			$sql = "DELETE FROM musician WHERE mid = $mid";
			$this->query($sql);
		}
	}
?>