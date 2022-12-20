<?php
	$conn = mysqli_connect('localhost','root','','shopbanhang') or die("Không thể kết nối Database");
	mysqli_select_db($conn,"shopbanhang") or die("không thể kết nối csdl");
	mysqli_query($conn,"SET NAMES'utf8'");
?>