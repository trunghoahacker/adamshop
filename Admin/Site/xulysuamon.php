
<?php
 	$con = mysql_connect('localhost', 'root', '' );
	mysql_query("SET character_set_results=utf8", $con);
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db('gioi_thieu_mon_an', $con);
	$id = $_POST['txtid'];
	$so= $_GET['page'];
	$name = $_POST['txtname'];
	$nguongoc = $_POST['txtnguongoc'];
	$chitiet = $_POST['txtchitiet'];
	$khaiquat = $_POST['txtkhaiquat'];
	if(isset($tenanh)){
		$anh=$tenanh;
	}
	else $anh=$_POST['txtanh'];
	$sql = "update cac_mon_an set name = '" . $name . "', nguon_goc = '" . $nguongoc . "', chi_tiet = '" . $chitiet . "',img = '" . $anh . "',khai_quat = '" . $khaiquat . "' WHERE id = " . $id;
	
	mysql_query($sql);
	header("Location: ../index.php?index=monan");	
?>
