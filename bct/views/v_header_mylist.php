  </head>
  <body>

    <!-- ======================== Header ======================== -->
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #181412; height: 90px; font-family: 'Helvetica', sans-serif;">
    
      <a class="navbar-brand mr-4 ml-3" href="./index.php">
        <img src="./public/core/image/logo.png"  alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <form class="form-inline my-2 my-lg-0 " action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="Tìm" aria-label="Search" name="key">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
        name="ok">Tìm kiếm</button>
      </form>
    
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Image and text -->
        <nav class="navbar navbar-dark" style="background-color: #181412;">

        <div class="navbar-brand ml-4 mr-3 d-flex" style="" href="#">
            <span class="" style=" color: #9befe0;margin-top: 7px;">
              <i class="fas fa-circle"></i>
            </span>
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle abc" href="./admin/admin.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Thể loại
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Pop</a>
                <a class="dropdown-item" href="#">HipHop</a>
                <a class="dropdown-item" href="#">Rock</a>
                <a class="dropdown-item" href="#">Balad</a>
              </div>
            </div>
          </div>
                  
          <a class="navbar-brand mx-4" href="#">
            <span class="mr-3" style=" color: #fae639;">
              <i class="fas fa-circle "></i>
            </span>
            VIP
          </a>
          
          <?php 
            if(isset($_SESSION["name"]))
            {
          ?>    
                <a class='navbar-brand mx-4' href='#'>
                  <span class='mr-3' style=' color: #f573a0;'>
                    <i class='fas fa-circle'> 
                    </i>
                  </span>
                  Nghệ sĩ
                </a>
              </nav>
              </div>
              <div class='info-user'>
                <div class='dropdown' style='background-color: #181412;'>
                  <button class= 'btn btn-secondary dropdown-toggle abc' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                 <?php echo $_SESSION["name"]." "; ?> 
                  </button>
                  <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                    <a class='dropdown-item' href='profile.php'>Thông tin cá nhân</a>
                    <a class='dropdown-item' href='#'>Nhạc yêu thích</a>
                    <a class='dropdown-item' href='mylist.php'>Playlist của tôi</a>
                    <a class='dropdown-item' href='#'>Nghe gần đây</a>
                    <a class='dropdown-item' href='logout.php'>Đăng xuất</a>
                  </div>
                <div>  
              </div>
          <?php  
            }            
            else
            { 
          ?>                
              <a class='navbar-brand mx-4' href='./login.php'>
                <span class='mr-3' style=' color: #f573a0;'>
                  <i class='fas fa-circle'>
                  </i>
                </span>
                Đăng nhập
              </a>
              </nav>
              </div>
          <?php    
            }      
          ?>
  </nav>
