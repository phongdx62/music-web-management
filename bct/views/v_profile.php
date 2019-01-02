<!-- ======================== Content ======================== -->
    <div class="body">
      <div class="overlay">  
        <div class="info">
          <div class="name">Admin <a href="#">Free</a></div>
          <div class="position">Tài khoản miễn phí</div>
          <div class="option">
            <a href="vip.php">Đăng kí VIP</a>
            <a href="#">Thông tin tài khoản</a>
            <a href="#">Thay ảnh nền</a>
          </div>
        </div>    
      </div>
      <div class="content">
        <div class="container">
          <div class="row" style="color: #fff;">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <div>Họ tên đệm</div>
            </div>
            <div class="col-sm-6">
              <div>   
                <form class="form-inline" action="profile.php" method="post">
                <label class="sr-only" for="inlineFormInputName2">Name</label>
                <input name="fname" type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Họ tên đệm" value="<?php echo $data['fname']; ?>">              
                <button name="change_fname"  type="submit" class="btn btn-secondary mb-2" style="background-color: #203149;font-size: 13px;
    border-color: #203149;">Thay đổi</button>
              </form>
              </div>          
            </div>
          </div>
          
          <div class="row" style="color: #fff;">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <div>Tên</div>
            </div>
            <div class="col-sm-6">
             <div>
                  <form class="form-inline" action="profile.php" method="post">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input name="lname" type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Tên" value="<?php echo $data['lname']; ?>">              
                  <button name="change_lname" type="submit" class="btn btn-secondary mb-2" style="background-color: #203149;font-size: 13px;
    border-color: #203149;">Thay đổi</button>
                </form>
              </div>     
            </div>
          </div>
          
           <div class="row" style="color: #fff;">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <div>Địa chỉ</div>
            </div>
            <div class="col-sm-6">
             <div>
                  <form class="form-inline" action="profile.php" method="post">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input name="address" type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Tên" value="<?php echo $data['address']; ?>">              
                  <button name="change_address" type="submit" class="btn btn-secondary mb-2" style="background-color: #203149;font-size: 13px;
    border-color: #203149;">Thay đổi</button>
                </form>
              </div>     
            </div>
          </div>


          <div class="row" style="color: #fff;">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <div>Bảo vệ tài khoản</div>
            </div>
            <div class="col-sm-6">
              <div>
                <form class="form-inline" action="profile.php" method="post">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input name="old_pass" type="password" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Nhập mật khẩu cũ"> 
                
              </div>
              <div>
                
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input name="new_pass" type="password" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Nhập mật khẩu mới" style="width: 234px;">
                
              </div>
              <div>
                
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input name="re_pass" type="password" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Nhập lại mật khẩu" style="width: 234px;">
                  <button name="change_pass" type="submit" class="btn btn-secondary mb-2" style="background-color: #203149;font-size: 13px;
    border-color: #203149;">Đổi mật khẩu</button>
                </form>
              </div>
            </div>

          </div>

          <div class="row" style="color: #fff;">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <div>Tài khoản kết nối</div>
            </div>
            <div class="col-sm-6">
              <div>
                <form class="form-inline">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Facebook">              
                  <button type="submit" class="btn btn-secondary mb-2" style="background-color: #203149;font-size: 13px;
    border-color: #203149;">Thay đổi</button>
                </form>
              </div>
              <div>
                <form class="form-inline" action="profile.php" method="post">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input name='email' type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Gmail" value="<?php echo $data['email']; ?>">              
                  <button name="change_email" type="submit" class="btn btn-secondary mb-2" style="background-color: #203149;font-size: 13px;
    border-color: #203149;">Thay đổi</button>
                </form>

               
              </div>      
            </div>
          </div>

          <div class="row" style="color: #fff;">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <div></div>
            </div>
            <div class="col-sm-6">
              <div>
                <form class="form-inline">
                  <label class="sr-only" for="inlineFormInputName2">Name</label> 
                  <br /> <br />                       
                </form>
              </div>
                  
            </div>
          </div>

          <div class="row" style="color: #fff;">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <div></div>
            </div>
            <div class="col-sm-6">
              <div>
                <form class="form-inline">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <?php  
                    if(isset($msg))
                    {
                      echo $msg;
                    }
                  ?>             
                 
                </form>
              </div>
                  
            </div>
          </div>

        </div>
      </div>
    </div>
<link rel="stylesheet" href="./public/core/css/style-profile.css">    