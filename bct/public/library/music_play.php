<?php 
  echo"<li audiourl='../public/core/$data[mp3]' cover='../public/core/$data[img]' artist='Bài hát: $data[song]'>";
    echo"<div class='bai-hat-tuan'>";

      echo"<div class='number'>*</div>";
      echo"<div class='info'>";
        echo"<div><a id='id-name' href='#' style='color: #FF66FF;'>$data[song]</a></div>";
        echo"<div class='singer'><a id='id-singer' href='#' style='color: #00FA9A;'>$data[sname]</a></div>";
      echo"</div>";
      echo"<div class='view-count'>homangtrang.net</div> ";          

    echo"</div>";
  echo"</li>";
?>