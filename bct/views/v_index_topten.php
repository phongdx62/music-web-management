<script language="javascript">
  function change_color_vn()
  {
    document.getElementById("vn").style.color = '#f60';
    document.getElementById("aumy").style.color = 'white';
    document.getElementById("hq").style.color = 'white';
  }
  function change_color_aumy()
  {
    document.getElementById("vn").style.color = 'white';
    document.getElementById("aumy").style.color = '#f60';
    document.getElementById("hq").style.color = 'white';
  }
  function change_color_hq()
  {
    document.getElementById("vn").style.color = 'white';
    document.getElementById("aumy").style.color = 'white';
    document.getElementById("hq").style.color = '#f60';
  }
</script>
<div class="col-sm-3 mb-3" style="">
  <div>
    <div class="mb-2">
    <a href="index.php" style="font-size: 1.7em; color: #FFF;font-weight: bold;">BXH Bài hát</a>
    </div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-1" style="background-color: transparent;font-weight: bold;padding: 0px;">
        <li class="breadcrumb-item"><a href="#" id="vn" onclick="change_color_vn()">Việt Nam</a></li>
        <li class="breadcrumb-item"><a href="#" id="aumy" onclick="change_color_aumy()">Âu Mỹ</a></li>
        <li class="breadcrumb-item"><a href="#" id="hq" onclick="change_color_hq()">Hàn Quốc</a></li>
      </ol>
    </nav>
  </div>
  <div id="topten">
    <?php
    
      $sql = "SELECT id, num, song, sname 
              FROM music ms
              INNER JOIN singer sg
              ON ms.sid = sg.sid
              ORDER BY num DESC LIMIT 10";
      $music->query($sql);
      $stt = 1;
      while ($data = $music->fetch_assoc())
      {
        echo"<div class='bai-hat-tuan'>";
          echo"<div class='number'>$stt</div>";
          echo"<div class='info'>";
            echo"<div class='title'><a id='id-name' href='comment.php?id= $data[id]'>$data[song]</a></div>";
            echo"<div class='singer mb-2'><a id='id-singer' href='music.php?id= $data[id]'>$data[sname]</a></div>";
          echo"</div>";
        echo"</div>";
        $stt++;
      }
                     
    ?>
  </div>
    <script src="./public/core/js/jquery-3.3.1.slim.min.js"></script> 

    <script type="text/javascript">
      $(document).ready(function() {
          $('#vn').click(function(e) {
              e.preventDefault();
              $('#topten').load('public/library/ajax-topten_vn.php');
          });
      });
    </script>
    
    <script type="text/javascript">
      $(document).ready(function() {
          $('#aumy').click(function(e) {
              e.preventDefault();
              $('#topten').load('public/library/ajax-topten_aumy.php');
          });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
          $('#hq').click(function(e) {
              e.preventDefault();
              $('#topten').load('public/library/ajax-topten_hq.php');
          });
      });
    </script>
  
           
        </div> 
      </div>
  </div>
</div>
</div>