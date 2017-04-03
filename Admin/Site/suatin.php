<?php
 	$con = mysql_connect('localhost', 'root', '' );
	mysql_query("SET character_set_results=utf8", $con);
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db('gioi_thieu_mon_an', $con);

	$id = $_GET['id'];		

	$sql = 'select * from tin_tuc where id = ' . $id;
	
	$result = mysql_query($sql);
	
	$banghi = mysql_fetch_array($result);

?>
<?php
if(isset($_POST['ok'])){ 
    if($_FILES['file']['name'] != NULL){ 
       
			if($_FILES['file']['type'] == "image/jpeg"
			|| $_FILES['file']['type'] == "image/png"
			|| $_FILES['file']['type'] == "image/gif"){
	
					$path = "../images/"; 
					$tmp_name = $_FILES['file']['tmp_name'];
					$tenanh = $_FILES['file']['name'];
					$type = $_FILES['file']['type']; 
					$size = $_FILES['file']['size']; 
					move_uploaded_file($tmp_name,$path.$tenanh);
			}
        }
}
?>

<img style="width:300px;height:250px;display:block;margin:50px auto 10px auto;" src="../images/<?php if(isset($_POST['ok'])) echo $tenanh; else echo $banghi['img']; ?> " />
<form style="margin:0 auto; display:block;float:none;width:350px;" action="" method="post" enctype="multipart/form-data" name="form0" id="form0" >
	<input name="file" type="file"><input name="ok" value="Sửa ảnh" type="submit">
</form>
<form action="index/xulysuatin.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table style="margin:auto;background:#35A858" width="435" border="1">
    <tr>
      <th colspan="2" align="center">Sửa thông tin tin tức</th>
    </tr>
    <tr>
      <td width="115">ID:</td>
      <td width="304"><input name="txtid" type="text" id="txtid" value="<?php echo $banghi['id']; ?>" readonly /></td>
    </tr>
    <tr>
      <td>Tiêu đề:</td>
      <td><input type="text" name="txtname" id="txtname" value="<?php echo $banghi['tieu_de']; ?>" /></td>
    </tr>
    <tr>
      <td>Nội dung:</td>
      <td><textarea name="txtthongtin" cols="45" rows="5" ><?php echo $banghi['thong_tin']; ?></textarea></td>
    </tr>
    <tr>
      <td>Ảnh:</td>
      <td><input name="txtanh" type="text" value="<?php if(isset($_POST['ok'])) echo $tenanh; else echo $banghi['img']; ?>" id="textfield" readonly></td>
    </tr>
    <tr>
    <tr>
      <td>Khái quát:</td>
      <td><textarea name="txtkhaiquat" cols="45" rows="5" ><?php echo $banghi['khai_quat']; ?></textarea></td>
    </tr>
    <tr>
      <td>Ngày đăng:</td>
      <td><input type="text" name="txtngay" id="txtname" value="<?php echo date('d/m/y'); ?>" readonly/></td>
    </tr>    
    <tr>
      <td colspan="2" align="center"><input type="submit" style="background:#B5D32E;width:100px;" name="ok" id="button" value="sửa" onclick="updateform()" /></td>
    </tr>
  </table>
  
</form>
