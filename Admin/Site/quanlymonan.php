<?php
 	$con = mysql_connect('localhost', 'root', '' );
	mysql_query("SET character_set_results=utf8", $con);
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db('gioi_thieu_mon_an', $con);
				$tong=0;
				
				$banghi= mysql_query("select count(*) from cac_mon_an");
				
				$dong= mysql_fetch_array($banghi);
				
				
				$tongsodong= $dong[0];
				
				$kichthuoc=5;
				
				$tongsotrang=1;
				
				if($tongsodong%$kichthuoc == 0)
					$tongsotrang= $tongsodong/$kichthuoc;
				else
					$tongsotrang= (int)($tongsodong/$kichthuoc) + 1 ;
					
				$dongbatdau =1;
				$tranghientai=1;
				
				if((!isset($_GET['page'])) || ($_GET['page'] == 1)){
					$dongbatdau=0;
					$tranghientai=1;
				}
				else{
					$dongbatdau= ($_GET['page'] - 1) * $kichthuoc;
					$tranghientai=$_GET['page'];
				}
						
				$result=mysql_query("select * from cac_mon_an where id limit {$dongbatdau}, {$kichthuoc} ");
 ?>
 <a style="margin:50px 0 0 0; float:left;font-size:20px;color:#19C717;font-weight:bold;" href="?index=themmonan">Thêm mới món ăn</a>
 <form action="index/xulyxoamonan.php" method="post"> 
  <table style="margin:auto;margin-top:100px;" width="100%" border="1" bgcolor="#26C2C9">
      <tr>
        <th width="17">id</th>
        <th width="63">Name</th>
        <th width="48">Nguồn gốc</th>
        <th width="100">Ảnh</th>
        <th width="560">Khái quát</th>
        <th width="46">Sửa</th>
        <th width="27">Xóa</th>
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
        <td <?php echo $maunen; ?> align="center"><?php echo $row['nguon_goc']; ?></td>
        <td <?php echo $maunen; ?> align="center"><img src="../images/<?php echo $row['img']; ?>" width="100"/></td>
        <td <?php echo $maunen; ?> align="left"><?php echo $row['khai_quat']; ?><a style="text-decoration:none" href="?index=chitietmon&id=<?php echo $row['id'];?>"><br>xem tiếp ></a></td>
        <td <?php echo $maunen; ?> align="center"><a href="index.php?index=suamonan&id=<?php echo $row['id']; ?>">Sửa</a></td>
        <td <?php echo $maunen; ?> align="center"><input type="checkbox" name="listid[]" value="<?php echo $row['id']; ?>" /></td>
    </tr>
<?php
		}
?> 
    <tr>
    	<td colspan="6">&nbsp;</td>
        <td  align="center"><input style="width:50px;background:#20BB45" type="submit" value="Xóa" /></td>
    </tr>   
  </table>
</form> 
<p style="color:#000000;margin:20px 0 0 100px;" >xem tiếp: 
    <span style="color:#000000;font-size:25px;">
        <?php
        echo "<";
            for($i=1;$i<= $tongsotrang;$i++){
                if($tranghientai == $i){
                    echo $i.", ";
                }
                else{
        ?>
            <a style="text-decoration:none;" href="?index=monan&page=<?php echo $i; ?>"><?php echo $i .", "; ?></a>	
        <?php		
                }
            }
            echo ">";	
        ?>
    </span>
</p>