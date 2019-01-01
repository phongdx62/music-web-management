<div style="margin-left: 300px;">
	<form action="edit_list_singer.php?sid=<?php echo $sid; ?>" method="post">	
		<h2 style="color: #FF9999; margin-left: 100px;">Sửa thông tin ca sĩ</h2>		
			<div>
				<input style="height: 30px; width: 500px; color: #00CC99;" type="text" name="sname" placeholder="Tên ca sĩ" value="<?php echo $row['sname']; ?>" required>
				<div style="color: #A020F0;">Tên ca sĩ</div>
			</div>
			<div>
				<input style="height: 30px; width: 500px; color: #00CC66;" type="text" name="sinfomation" placeholder="Tiểu sử ca sĩ" value="<?php echo $row['sinfomation']; ?>" required>
				<div style="color: #A020F0;">Tiểu sử ca sĩ</div>
			</div>
			<div>
				<input style="height: 30px; width: 500px; color: #00CC66;" type="text" name="simg" placeholder="Đường dẫn hình ảnh" value="<?php echo $row['simg']; ?>" required>
				<div style="color: #A020F0;">Đường dẫn hình ảnh</div>
			</div>	
		<button style="height: 30px; color: #FF6600; margin-left: 200px;" type="submit" name="ok">Đồng ý sửa</button>
	</form>
</div>