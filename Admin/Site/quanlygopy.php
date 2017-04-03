 <?php
 	$con = mysql_connect('localhost', 'root', '' );
	mysql_query("SET character_set_results=utf8", $con);
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db('gioi_thieu_mon_an', $con);
	$sql = 'select * from gop_y';
	$result = mysql_query($sql);
 ?>
 <h1 style="text-transform:uppercase;font-size:20px;text-align:center;color:#FFF8F8;margin:50px 0 10px 0;">quản lý góp ý</h1>
 <form action="index/xulyxoa.php" method="post"> 
  <table style="margin:auto;" width="100%" border="1" bgcolor="#26C2C9">
      <tr>
        <th width="35" height="24">id</th>
        <th width="65">Name</th>
        <th width="117">Email</th>
        <th width="240">Nội dung</th>
        <th width="86">Ngày gửi</th>
        <th width="31">Xóa</th>
      </tr>
<?php		
	$i = 0;

	$maunen = '';	
	while($row = mysql_fetch_array($result)){
		
			++$i;
			
			if($i%2 == 0)
			{
				$maunen = "style='background:#BBB746;'";
			}
			else
			{
				$maunen = "style='background:pink;'";
			}
					
?>
	<tr>
    	<td <?php echo $maunen; ?> align="center"><?php echo $row['id']; ?></td>
        <td <?php echo $maunen; ?> align="center"><?php echo $row['name']; ?></td>
        <td <?php echo $maunen; ?> align="center"><?php echo $row['email']; ?></td>
        <td <?php echo $maunen; ?>  align="left"><?php echo $row['noi_dung']; ?></td>
        <td <?php echo $maunen; ?> align="center"><?php echo $row['ngay']; ?></td>
        <td <?php echo $maunen; ?> align="center"><input type="checkbox" name="listid[]" value="<?php echo $row['id']; ?>" /></td>
    </tr>
<?php
		}
?> 
    <tr>
        <td colspan="5" align="center">&nbsp;</td>
        <td align="center"><input type="submit" value="Xóa" /></td>
    </tr>   
  </table>
</form> 
