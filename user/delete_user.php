<?php
	$id = $_GET['id'];
	

	//Kết nối cơ sở dữ liệu
	$conn = mysql_connect("localhost","root","")or die("Lỗi kết nối đến server");
	mysql_select_db("abc", $conn) or die ("Không tồn tại cơ sở dữ liệu abc"); 	
	//Truy vấn dữ liệu
	$sql = mysql_query("DELETE from users where id ='$id' ") or die("Lỗi truy vấn");
	
	if($sql)
	{
		header("location: ../manager_user.php");
	}
	
?>