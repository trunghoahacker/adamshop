
<?php
 	$con = mysql_connect('localhost', 'root', '' );
	mysql_query("SET character_set_results=utf8", $con);
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db('gioi_thieu_mon_an', $con);
	
	$id = $_POST['txtid'];
	$tieude = $_POST['txtname'];
	$noidung = $_POST['txtthongtin'];
	$khaiquat= $_POST['txtkhaiquat'];
	$ngay = $_POST['txtngay'];
	if(isset($tenanh)){
		$anh=$tenanh;
	}
	else $anh=$_POST['txtanh'];
	$sql = "update tin_tuc set tieu_de = '" . $tieude . "', thong_tin = '" . $noidung . "',img = '" . $anh . "',khai_quat = '".$khaiquat."',ngay_dang = '".$ngay."' WHERE id = " . $id;
	
	mysql_query($sql);
	header('Location: ../index.php?index=tintuc');	
?>
