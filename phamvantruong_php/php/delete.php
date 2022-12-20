<?php
	require_once 'connect.php';
	$idDelete = isset($_GET['idDelete']) ? $_GET['idDelete'] : header("location: ../admin.php?runPage=catalog");
	$tableDelete = isset($_GET['tableDelete']) ? $_GET['tableDelete'] : header("location: ../admin.php?runPage=catalog");

	$delete_sql = "";
	if($tableDelete == 'catalog')
		$delete_sql = mysqli_query($conn,"DELETE FROM ".$tableDelete." WHERE catalog_id='".$idDelete."'");

	if($tableDelete == 'post')
		$delete_sql = mysqli_query($conn,"DELETE FROM ".$tableDelete." WHERE id_post='".$idDelete."'");

	if($tableDelete == 'product')
		$delete_sql = mysqli_query($conn,"DELETE FROM ".$tableDelete." WHERE id_product='".$idDelete."'");

	if($tableDelete == 'transaction')
		$delete_sql = mysqli_query($conn,"DELETE FROM ".$tableDelete." WHERE id_tst='".$idDelete."'");

	if($tableDelete == 'admin')
		$delete_sql = mysqli_query($conn,"DELETE FROM ".$tableDelete." WHERE user_id='".$idDelete."'");

	if($delete_sql)
		header("location: ../admin.php?runPage=".$tableDelete."");
	else
		echo "Không thể xóa trường dữ liệu này.";
?>