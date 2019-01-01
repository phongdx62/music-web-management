<link rel='stylesheet' href='../core/css/index-content.css'>
<?php 
  while ($data = $music->fetch_assoc()) 
  {           
    echo"<div class='box' style='float: left;'>";
      echo"<div class='avatar'>";
        echo"<div class='overload'>";
          echo"<a href='comment.php?id= $data[id]'><img src='public/core/$data[img]' alt=''></a>";
          echo"<span><i class=' fab fa-google-play fa-2x'></i></span>";
        echo"</div>";
      echo"</div>";
      echo"<div class='name'><a style='color: #00CC66;'>$data[song]</a></div>";
        echo"<div class='singer'><a style='color: #FFCCFF;'>$data[sname]</a></div>";                
    echo"</div>";
  }
?>