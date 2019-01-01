<?php  
	echo"<tr>";
		echo"<td>$stt</td>";
		echo"<td>$row[fname]</td>";
		echo"<td>$row[lname]</td>";
		echo"<td>$row[username]</td>";
		echo"<td>$row[email]</td>";
		echo"<td>$row[address]</td>";
		if($row['sex'] == 1)
		{
			echo "<td>Nam</td>";
		}
		else
		{
			echo "<td>Nữ</td>";
		}
		echo"<td>$row[birth]</td>";						
		if($row['level'] == 1)
		{
			echo "<td>VIP</td>";
		}
		else if($row['level'] == 0)
		{
			echo "<td>Thành viên</td>";
		}
		else
		{
			echo "<td>Admin</td>";
		}
		echo"<td><a href='send_mail.php?uid=$row[uid]' style='color:blue;'>Gửi</a></td>";
		echo"<td><a href='del_list_user.php?uid=$row[uid]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";						
		echo"</tr>";
		//href='del_list_user.php?id=$row[matv]' matv sẽ được chuyển theo đường dẫn
?>