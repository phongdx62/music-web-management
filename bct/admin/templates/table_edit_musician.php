<div style="margin-left: 300px;">
	<form action="edit_list_musician.php?mid=<?php echo $mid; ?>" method="post">	
		<h2 style="color: #FF9999; margin-left: 100px;">Sửa thông tin nhạc sĩ</h2>		
			<div>
				<input style="height: 30px; width: 500px; color: #00CC99;" type="text" name="mname" placeholder="Tên nhạc sĩ" value="<?php echo $row['mname']; ?>" required>
				<div style="color: #A020F0;">Tên nhạc sĩ</div>
			</div>
			<div>
				<input style="height: 30px; width: 500px; color: #00CC66;" type="text" name="minfomation" placeholder="Tiểu sử nhạc sĩ" value="<?php echo $row['minfomation']; ?>" required>
				<div style="color: #A020F0;">Tiểu sử nhạc sĩ</div>
			</div>
			<div>
				<input style="height: 30px; width: 500px; color: #00CC66;" type="text" name="mimg" placeholder="Đường dẫn hình ảnh" value="<?php echo $row['mimg']; ?>" required>
				<div style="color: #A020F0;">Đường dẫn hình ảnh</div>
			</div>	
		<button style="height: 30px; color: #FF6600; margin-left: 200px;" type="submit" name="ok">Đồng ý sửa</button>
	</form>
</div>