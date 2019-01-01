<?php  
	include('database.php');
	class music extends database
	{
		// protected $id;
		// protected $song;
		// protected $singer;
		// protected $musician;
		// protected $country;
		// protected $style;	
		// protected $new;
		// protected $best;
		// protected $topten;
		// protected $img;
		// protected $mp3;

		public function __construct()
		{
			$this->connect();
		}

		// public function set_song($Song)
		// {
		// 	$this->song = $Song;
		// }

		// public function get_song()
		// {
		// 	return $this->song;
		// }

		// public function set_sname($sname)
		// {
		// 	$this->singer = $sname;
		// }

		// public function get_sname()
		// {
		// 	return $this->singer;
		// }

		// public function set_mname($mname)
		// {
		// 	$this->musician = $mname;
		// }

		// public function get_mname()
		// {
		// 	return $this->musician;
		// }

		// public function set_country($Country)
		// {
		// 	$this->country = $Country;
		// }

		// public function get_country()
		// {
		// 	return $this->country;
		// }

		// public function set_style($Style)
		// {
		// 	$this->style = $Style;
		// }

		// public function get_style()
		// {
		// 	return $this->style;
		// }

		// public function set_new($New)
		// {
		// 	$this->new = $New;
		// }

		// public function get_new()
		// {
		// 	return $this->new;
		// }

		// public function set_best($Best)
		// {
		// 	$this->best = $Best;
		// }

		// public function get_best()
		// {
		// 	return $this->best;
		// }

		// public function set_topten($Topten)
		// {
		// 	$this->Topten = $Topten;
		// }

		// public function get_topten()
		// {
		// 	return $this->topten;
		// }

		// public function set_img($Img)
		// {
		// 	$this->img = $Img;
		// }

		// public function get_img()
		// {
		// 	return $this->img;
		// }

		// public function set_mp3($Mp3)
		// {
		// 	$this->mp3 = $Mp3;
		// }

		// public function get_mp3()
		// {
		// 	return $this->mp3;
		// }

		public function m_list_music()
		{
			$sql = "SELECT id, song, sname, country, style, new, best, topten
					FROM music ms
					INNER JOIN singer sg
					ON ms.sid = sg.sid";
			$this->query($sql);
			while($row = $this->fetch_assoc())
			{
				require("templates/show_music.php");
			}
		}

		public function m_del_music($id)
		{
			$sql = "DELETE FROM music WHERE id = $id";
			$this->query($sql);
		}

		public function m_search_music($key)
		{
			$sql = "SELECT id, song, sname, mname, country, style, new, best, topten FROM music
					INNER JOIN singer ON music.sid = singer.sid
					INNER JOIN musician ON music.mid = musician.mid
					WHERE song LIKE '%$key%' OR sname LIKE '%$key%' OR mname LIKE '%$key%' OR country LIKE '%$key%' OR style LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("templates/table_music.php");
                
                while ($row = $this->fetch_assoc()) 
                {
                    require("templates/show_music.php");         
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_add_music($song, $sid, $mid, $country, $style, $new, $best, $topten, $img, $mp3)
		{
			$sql = "SELECT id FROM music WHERE song = '$song'";
			$this->query($sql);

			$num = $this->num_rows();
			if($num>0)
			{
				return 'fail';
			}
			else
			{
				$sql = "INSERT INTO music(song,
										  sid,
										  mid,
										  country,
										  style,
										  new,
										  best,
										  topten,
										  img,
										  mp3)	VALUES	
										  ('$song',
										   '$sid',
										   '$mid',
										   '$country',
										   '$style',
										   '$new',
										   '$best',
										   '$topten',
										   '$img',
										   '$mp3')";
				$this->query($sql);
			}
		}

		public function m_edit_music($id, $song, $sid, $mid, $country, $style, $new, $best, $topten)
		{
			$sql = "UPDATE music SET song = '$song', 
									 sid = '$sid', 
									 mid = '$mid', 
									 country = '$country', 
									 style = '$style', 
									 new = '$new', 
									 best = '$best', 
									 topten = '$topten' 
								 WHERE id = $id";
			$this->query($sql);
		}

		public function m_get_music($id)
		{
			$sql = "SELECT id, song, sname, mname, country, style, new, best, topten 
					FROM music
					INNER JOIN singer ON music.sid = singer.sid
					INNER JOIN musician ON music.mid = musician.mid
					WHERE id = $id";
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}

		public function m_search($key)
		{
			$sql = "SELECT song, sname, mname, country, style, img, mp3 FROM music 
					INNER JOIN singer ON music.sid = singer.sid
					INNER JOIN musician ON music.mid = musician.mid
					WHERE song LIKE '%$key%' OR sname LIKE '%$key%' OR mname LIKE '%$key%' OR country LIKE '%$key%' OR style LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
            	echo "<p style='color:#FF6633;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                $dem=1;
                while ($data = $this->fetch_assoc())
                {
                  	require("public/library/music_play.php");
                }
            }                 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!;</p>";
            } 
                 
        }

        public function show_topten($country)
        {
        	$sql = "SELECT id, topten, song, sname 
        			FROM music ms
        			INNER JOIN singer sg
        			ON ms.sid = sg.sid
        			WHERE topten BETWEEN 1 AND 10 AND country = '$country' 
        			ORDER BY topten";
		    $this->query($sql);
		    while ($data = $this->fetch_assoc())
		    {
		      echo"<div class='bai-hat-tuan'>";
		        echo"<div class='number'>$data[topten]</div>";
		        echo"<div class='info'>";
		          echo"<div class='title'><a id='id-name' href='comment.php?id= $data[id]'>$data[song]</a></div>";
		          echo"<div class='singer mb-2'><a id='id-singer' href='music.php?id= $data[id]'>$data[sname]</a></div>";
		        echo"</div>";
		      echo"</div>";
		    }
        }

        public function get_sid($sname)
        {
        	$sql = "SELECT sid FROM singer WHERE sname = '$sname'";
        	$this->query($sql);
        	$data = $this->fetch_assoc();
        	return $data["sid"];
        }

        public function get_mid($mname)
        {
        	$sql = "SELECT mid FROM musician WHERE mname = '$mname'";
        	$this->query($sql);
        	$data = $this->fetch_assoc();
        	return $data["mid"];
        }

        public function check_sname($sname)
        {
        	$sql = "SELECT * FROM singer WHERE sname = '$sname'";
        	$this->query($sql);
        	if($this->num_rows()==0)
        	{
        		return 'fail';
        	}
        }

        public function check_mname($mname)
        {
        	$sql = "SELECT * FROM musician WHERE mname = '$mname'";
        	$this->query($sql);
        	if($this->num_rows()==0)
        	{
        		return 'fail';
        	}
        }

	}
?>