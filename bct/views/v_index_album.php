<script language="javascript">
  function change_color_alot()
  {
    document.getElementById("alot").style.color = '#f60';
    document.getElementById("new").style.color = 'white';
  }
  function change_color_new()
  {
    document.getElementById("alot").style.color = 'white';
    document.getElementById("new").style.color = '#f60';
  }
</script> 
<div class="d-flex">
  <a href="#" style="font-size: 1.7em; color: #FFF;font-weight: bold;margin-right: 10px;">Ablum</a>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb" style="background-color: transparent;font-weight: bold;">
      <li class="breadcrumb-item"><a href="#" id="alot" onclick="change_color_alot()">Nghe nhiều</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="#" id="new" onclick="change_color_new()">Mới nhất</a></li>
    </ol>
  </nav>
</div>
<div class="content">
  <div id="album">
    <?php  
      $sql = "SELECT id, new, song, sname, img, mp3 
              FROM music ms
              INNER JOIN singer sg
              ON ms.sid = sg.sid
              WHERE new = '1'";
        $music->query($sql);
        include("public/library/ajax-show_album.php");                           
    ?>
  </div>
  <script src="./public/core/js/jquery-3.3.1.slim.min.js"></script> 

  <script type="text/javascript">
    $(document).ready(function() {
        $('#new').click(function(e) {
            e.preventDefault();
            $('#album').load('public/library/ajax-new.php');
        });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
        $('#alot').click(function(e) {
            e.preventDefault();
            $('#album').load('public/library/ajax-alot.php');
        });
    });
  </script>

</div>