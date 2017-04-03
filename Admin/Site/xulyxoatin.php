<?php	
    $con = mysql_connect('localhost', 'root', '' );
	mysql_select_db('gioi_thieu_mon_an', $con);
	
	$listid = $_POST['listid'];
	
	foreach($listid as $id)
	{
		$sql = "delete from tin_tuc where id = " . $id;
		
		mysql_query($sql);
	}
	
	header('Location: ../index.php?index=tintuc');	
?>