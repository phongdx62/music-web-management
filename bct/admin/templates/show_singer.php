<?php  
	echo"<tr>";
		echo"<td>$row[sid]</td>";
		echo"<td>$row[sname]</td>";
		echo"<td>$row[sinfomation]</td>";
		echo"<td>$row[simg]</td>";
		echo"<td>$row[votelike]</td>";
		
		echo"<td><a href='edit_list_singer.php?sid=$row[sid]' style='color:blue;'>Sửa</a></td>";
		echo"<td><a href='del_list_singer.php?sid=$row[sid]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";						
		echo"</tr>";
?>