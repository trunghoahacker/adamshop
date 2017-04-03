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

<img style="width:300px;height:250px;display:block;margin:50px auto 10px auto;" src="../images/<?php echo $tenanh; ?>" />
<form style="margin:0 auto; display:block;float:none;width:350px;" action="?index=themtin" method="post" enctype="multipart/form-data" name="form0" id="form0" >
	<input name="file" type="file"><input name="ok" value="Thêm ảnh" type="submit">
</form>
<form action="index/xulythemtin.php" method="post" enctype="multipart/form-data" name="form2" id="form2" onSubmit="return kiemtratin() ">
  <table style="margin:auto;background:#35A858" width="435" border="1">
    <tr>
      <th colspan="2" align="center">Thêm tin tức</th>
    </tr>
    <tr>
      <td>Tiêu đề:</td>
      <td><input type="text" name="txttieude" id="txtname" value="" /></td>
    </tr>
    <tr>
      <td>Nội dung:</td>
      <td><textarea name="txtthongtin" cols="45" rows="5" ></textarea></td>
    </tr>
    <tr>
      <td>Ảnh:</td>
      <td><input name="txtanh" type="text" value="<?php if(isset($tenanh)) echo $tenanh; ?>" id="textfield" readonly></td>
    </tr>
    <tr>
    <tr>
      <td>Khái quát:</td>
      <td><textarea name="txtkhaiquat" cols="45" rows="5" ></textarea></td>
    </tr>    
    <tr>
      <td>Ngày đăng:</td>
      <td><input type="text" name="txtngay" id="textfield2" readonly value="<?php echo date('d/m/y'); ?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" style="background:#B5D32E;width:100px;" name="ok" id="button" value="Thêm tin" onclick="updateform()" /></td>
    </tr>
  </table>
  
</form>
