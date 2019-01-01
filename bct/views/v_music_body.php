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
  }
  $music->disconnect();
?>  
        </ul>
        <div class="force-overflow"></div>
      </div>
    </div>
    <div class="col-sm-3">
      
    </div>
  </div>
  </div>
  <div style="height: 20px; width: 100%"></div>s    
</div>