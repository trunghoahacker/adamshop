<?php
 	$con = mysql_connect('localhost', 'root', '' );
	mysql_query("SET character_set_results=utf8", $con);
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db('gioi_thieu_mon_an', $con);
	
	$id=$_GET['id'];
	$result=mysql_query("select * from cac_mon_an where id=".$id);
	$row = mysql_fetch_array($result);
 ?>
 <a style="margin:50px 0 0 0; float:left;font-size:20px;color:#19C717;font-weight:bold;" href="?index=themmonan">Thêm mới món ăn</a>
 <img style="display:block;width:200px;height:150px;margin:50px 0 0 230px;float:left" src="../images/<?php echo $row['img']; ?>"/>
 <a style="margin:150px 0 0 150px;font-size:20px;float:left;font-weight:bold;color:#AABD1C" href="index.php?index=suamonan&id=<?php echo $row['id']; ?>">Sửa món ăn</a>
 <form action="index/xulyxoamonan.php" method="post"> 
  <table style="margin:auto;" width="100%" bgcolor="#26C2C9">
	<tr>
    	<td width="10%" bgcolor="#92AC31">Name:</td>
        <td width="90%" align="center" bgcolor="#92AC31"><?php echo $row['name'] ?></td>
    </tr> 
	<tr>
    	<td bgcolor="#357F29">Nguồn gốc:</td>
        <td align="center" bgcolor="#357F29"><?php echo $row['nguon_goc'] ?></td>
    </tr>
	<tr>
    	<td bgcolor="#289B87">Chi tiết:</td>
        <td bgcolor="#289B87"><?php echo $row['chi_tiet'] ?></td>
    </tr>
	<tr>
    	<td colspan="2" align="center" bgcolor="#3A399C"><input style="width:150px;background:#20BB45" type="submit" value="Xóa" /></td>
    </tr>            
  </table>
</form> 