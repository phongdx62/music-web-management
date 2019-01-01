<?php  
	echo"<tr>";
		echo"<td>$row[mid]</td>";
		echo"<td>$row[mname]</td>";
		echo"<td>$row[minfomation]</td>";
		echo"<td>$row[mimg]</td>";
		echo"<td>$row[votelike]</td>";
		
		echo"<td><a href='edit_list_musician.php?mid=$row[mid]' style='color:blue;'>Sửa</a></td>";
		echo"<td><a href='del_list_musician.php?mid=$row[mid]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";						
		echo"</tr>";
?>