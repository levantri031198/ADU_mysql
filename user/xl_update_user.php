<?php
	$id = $_POST['id'];
	$u = $_POST['username'];
	$p = $_POST['pass'];
	$mail = $_POST['email']; 


	$conn = mysql_connect("localhost","root","")or die("Lỗi kết nối đến server");
	mysql_select_db("abc") or die ("Không tồn tại cơ sở dữ liệu abc"); 	
	//Truy vấn dữ liệu
	$sql = mysql_query("update users set username = '$u', password = '$p', email = '$mail' where id = '$id'") or die("Lỗi truy vấn");
	if($sql)
	{
		header("location: ../manager_user.php");
	}
	
?>