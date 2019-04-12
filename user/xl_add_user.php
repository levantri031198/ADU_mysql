<?php
	

	$u = $_POST['username'];
	$p = $_POST['pass'];
	$mail = $_POST['email']; 


	$conn = mysql_connect("localhost","root","") or die("Lỗi kết nối đến server");
	mysql_select_db("abc", $conn) or die ("Không tồn tại cơ sở dữ liệu abc"); 	
	//Truy vấn dữ liệu
	$sql = mysql_query("INSERT INTO users(username, password, email) values('$u','$p','$mail')")  or die(mysql_error());
	
	
	
	
		header("location: ../manager_user.php");
	


?>