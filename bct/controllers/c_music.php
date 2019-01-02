<?php  
  if (isset($_REQUEST['ok'])) 
  {              
    $key = addslashes($_POST['key']);

    if (empty($key)) 
    {
      echo "<p style= 'color:red;'>* Dữ liệu tìm kiếm không được để trống</p>";
    } 
    else
    {
      $music->m_search($key);
    }
  }
  else
  {
    if(!empty($_GET['style']) && isset($_GET['style']))
    {
      $style = addslashes($_GET['style']);
      echo "<h1 style='color: #EEDC82; margin-left: 250px;'>Thể loại : $style</h1>";
      $sql = "SELECT id, song, sname, img, mp3
              FROM music ms
              INNER JOIN singer sg
              ON ms.sid = sg.sid 
              WHERE style = '". $style ."'";
      $music->query($sql);
 
      while ($data = $music->fetch_assoc()) 
      {
        require("./public/library/music_play.php");
      }
    }

    if(isset($_GET["sid"]))
    {
      $sid = addslashes(stripslashes($_GET["sid"]));

      $sql = "SELECT sname, sinfomation 
              FROM music ms
              INNER JOIN singer sg
              ON sg.sid = ms.sid
              WHERE ms.sid = $sid ";
      $music->query($sql);
      $data = $music->fetch_assoc();
      echo "<h1 style='color: #EEDC82; margin-left: 250px;'>Nghệ sĩ : $data[sname]</h1>";
      echo "<p style='color:white;'>Thông tin: $data[sinfomation]</p>";
      
      $sql = "SELECT song, sname, img, mp3, sinfomation 
              FROM music ms
              INNER JOIN singer sg
              ON sg.sid = ms.sid
              WHERE ms.sid = $sid ";
      $music->query($sql);        
      while ($data = $music->fetch_assoc()) 
      {
        require("./public/library/music_play.php");
      } 
    }
  }
  $music->disconnect();
?>  