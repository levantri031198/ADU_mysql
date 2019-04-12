<?php
	$id = $_GET['id'];
	


	$conn = mysql_connect("localhost","root","")or die("Lỗi kết nối đến server");
	mysql_select_db("abc") or die ("Không tồn tại cơ sở dữ liệu abc"); 	
	//Truy vấn dữ liệu
	$sql = mysql_query("select * from users where id = '$id'") or die("Lỗi truy vấn");
	$rs = mysql_fetch_array($sql);
	// print_r($rs);
	
?>


<h1>Cập nhật người dùng</h1>
<form action="xl_update_user.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	Tên đăng nhập: <input type="text" name="username" value="<?php echo $rs['username'];?>"><br>
	Mật khẩu: <input type="password" name="pass" value="<?php echo $rs['password'];?>"><br>
	Email: <input type="text" name="email" value="<?php echo $rs['email'];?>"><br>
	
	<input type="submit" value="Cập nhật người dùng">
</form>