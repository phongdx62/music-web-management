<link rel="stylesheet" href="./public/core/css/music-content.css">  
<div class="body">
  <div style="background: rgb(0,0,0);background: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.6) 0%);width: 100%;height: 100%;">
  <div style="height: 20px; width: 100%"></div>
  <div class="container">
  <div class="row">
    <div class="col-sm-9">
      <div class="player">
        <div style="background: rgb(0,0,0);background: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.6) 0%);width: 100%;height: 100%;">
        <div class="cover"></div>
        <div class="title"></div>
        <div class="artist"></div>
        
        <div class="controls">
          <div class="rew">
            <i class="fas fa-backward" ></i>
          </div>
          <div class="play">
            <i class="fas fa-play-circle" ></i>
       
          </div>
          <div class="pause">
            <i class="fas fa-pause-circle" ></i>
          </div>
          <div class="fwd">
            <i class="fas fa-forward" ></i>
          </div>
          
          
        </div>
        </div>
      </div>

      <div class="viewlist" id="style-1">
        <ul class="playlist">
        <?php         
          // Gán hàm addslashes để chống sql injection
            $key = addslashes($_POST['key']);

            if (empty($key)) 
            {
              echo "<p style= 'color:red;'>* Dữ liệu tìm kiếm không được để trống</p>";
            } 
            else
            {
              $music->m_search($key);
            }
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