<?php
 	$con = mysql_connect('localhost', 'root', '' );
	mysql_query("SET character_set_results=utf8", $con);
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db('gioi_thieu_mon_an', $con);
	
	$id = "";
	$tieude = $_POST['txttieude'];
	$thongtin = $_POST['txtthongtin'];
	$anh=$_POST['txtanh'];
	$khaiquat = $_POST['txtkhaiquat'];
	$ngay= $_POST['txtngay'];
	
	$sql = "INSERT INTO tin_tuc (`id`, `tieu_de`, `thong_tin`, `img`, `khai_quat`, `ngay_dang`) VALUES ('".$id."','".$tieude."','".$thongtin."','".$anh."','".$khaiquat."','".$ngay."')";
	
	mysql_query($sql);
	
	header('Location: ../index.php?index=tintuc');	

?>