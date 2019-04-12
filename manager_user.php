<?php 
	$conn = mysql_connect("localhost","root","")or die("Lỗi kết nối đến server");
	mysql_select_db("abc") or die ("Không tồn tại cơ sở dữ liệu abc"); 	
	//Truy vấn dữ liệu
	$sql = mysql_query("select * from users") or die("Lỗi truy vấn");

?>

<h1> Danh sách người dùng </h1>
<table border="1">
	<tr>
		<th>STT</th>
		<th>Tên đăng nhập</th>
		<th>Mật khẩu</th>
		<th>Email</th>
		<br>
		<th>Action</th>
	</tr>
	<?php
	$i = 1;
	while ($rs = mysql_fetch_array($sql))
	{
		echo "<tr>";
		echo "<td>".$i. "</td>";
		echo "<td>".$rs["username"]. "</td>";
		echo "<td>*************</td>";
		echo "<td>".$rs["email"]. "</td>";
		echo "<td><a href='user/add_user.php'>Thêm</a> | <a href='user/update_user.php?id=".$rs['id']."'>Sửa</a> | <a href='user/delete_user.php?id=".$rs['id']."'>Xóa</a>";
		echo "</tr>";
		$i++;
	}
	?>
</table>