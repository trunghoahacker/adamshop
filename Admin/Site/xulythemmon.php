<?php

 	$con = mysql_connect('localhost', 'root', '' );
	mysql_query("SET character_set_results=utf8", $con);
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db('gioi_thieu_mon_an', $con);
	
	$id = "";
	$name = $_POST['txtten'];
	$nguongoc = $_POST['txtnguongoc'];
	$chitiet = $_POST['txtchitiet'];
	$anh=$_POST['txtanh'];
	$khaiquat = $_POST['txtkhaiquat'];
	$sql ="INSERT INTO cac_mon_an (`id`, `name`, `nguon_goc`, `chi_tiet`, `img`, `khai_quat`) VALUES ('".$id."','".$name."','".$nguongoc."','".$chitiet."','".$anh."','".$khaiquat."')";
	mysql_query($sql);
	
	header('Location: ../index.php?index=monan');	

?>