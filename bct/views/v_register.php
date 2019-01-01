<link rel="stylesheet" href="./public/core/css/style-register.css">

	<title>Trang đăng ký</title>
</head>
<body class="text-center">

	<form action="register.php" method="post" class="form-signin">
		<img class="mb-3" src="public/core/image/login.png" alt="" width="158" height="65">
		<h1 class="h3 mb-3 font-weight-normal">Đăng ký</h1>
		<div class="row">
			<div class="col-md-7 mb-3">
		
				<input type="text" class="form-control is-valid" id="firstName" name="fname" placeholder="Họ tên đệm" value required>
				<div class="invalid-feedback">
					Valid first name is required.
				</div>

			</div>
			<div class="col-md-5 mb-3">
			
				<input type="text" class="form-control is-valid" id="lastName" name="lname" placeholder="Tên" value required>
				<div class="invalid-feedback">
					Valid last name is required.
				</div>
			</div>			
		</div>
		<div class="mb-3">
				
				<div class="input-group">										
					<input type="text" class="form-control is-valid" id="username" name="user" placeholder="Tài khoản" required>
					<div class="invalid-feedback">
						Your username is required.
					</div>			
				</div>
		</div>
		<div class="mb-3">
			<label for="inputEmail" class="sr-only"></label>
			<input type="text"  name = "address" class="form-control is-valid" placeholder="Địa chỉ" required autofocus>
		</div>
		<div class="mb-3">
			<label for="inputEmail" class="sr-only"></label>
			<input type="Email"  name = "email" class="form-control is-valid" placeholder="Địa chỉ email" required autofocus>
		</div>
		<div class="mb-3">
			<tr>
					<td>Giới tính</td>
					<td>
						<input type="radio" name="gioitinh" value="1" checked="checked">Nam
						<input type="radio" name="gioitinh" value="0">Nữ
					</td>			
				</tr>
		</div>
		<div class="mb-3">
			<tr>
					<td>Ngày sinh</td>
					<td>
						<select name="ngay">
							<option value="date">Ngày</option>
							<?php  
								for($i=1;$i<=31;$i++)
								{
									echo "<option value='$i'>$i</option>";
								}
							?>			
						</select>
						<select name="thang">
							<option value="month">Tháng</option>
							<?php  
								for($i=1;$i<=12;$i++)
								{
									echo "<option value='$i'>$i</option>";
								}
							?>			
							</select>
						<select name="nam">
							<option value="year">Năm</option>
							<?php  
								for($i=1900;$i<=date("Y");$i++)
								{
									echo "<option value='$i'>$i</option>";
								}
							?>			
						</select>
					</td>
				</tr>		
		</div>

		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="password"  name="pass" class="form-control is-valid" placeholder="Mật khẩu" required >
		</div>

		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="password"  name="re_pass" class="form-control is-valid" placeholder="Nhập lại mật khẩu" required >
		</div>

		<div style="color:green;" class="mb-2">
		
		</div>

		

		<hr class="mb-2">			
		<button class="btn btn-lg btn-success btn-block mb-2" type="submit" name="ok">Đăng ký</button>
		<p class="mt-4 mb-4 text-muted" style="font-size: 15px; opacity: .8;">Copyright 2018-2019</p>

		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<?php 
				include("./controllers/c_register.php");
				if(isset($msg))
				{
					echo $msg;
				} 
				
			?>
		</div>
	</form>
	
	<div class="go-home fixed-bottom" style="bottom: 1rem; left: 94%;">
	    <a href="./index.php"><i class="fas fa-home fa-3x " style="color: #3ea24c;"></i></a>
	</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  	
		<script src="./public/core/js/jquery-3.3.1.slim.min.js"></script>
		<script src="./public/core/js/popper.min.js"></script>
		<script src="./public/core/js/bootstrap.min.js"></script>
		<script src="./public/core/js/main.js"></script>
	</body>
</html>
</body>
</html>