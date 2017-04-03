<?php
if(isset($_POST['ok'])){     
	if($_FILES['file']['name'] != NULL){ 
       
			if($_FILES['file']['type'] == "image/jpeg"
			|| $_FILES['file']['type'] == "image/png"){
	
					$path = "../images/"; 
					$tmp_name = $_FILES['file']['tmp_name'];
					$tenanh = $_FILES['file']['name'];
					move_uploaded_file($tmp_name,$path.$tenanh);
			}
        }
}
?>

<img style="width:300px;height:250px;display:block;margin:50px auto 10px auto;" src="../images/<?php echo $tenanh; ?>" />
<form style="margin:0 auto; display:block;float:none;width:350px;" action="" method="post" enctype="multipart/form-data" name="form0"><input type="file" name="file"><input type="submit" name="ok" value="Thêm ảnh"></form>
<form action="index/xulythemmon.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return update()">
  <table style="margin:auto;background:#35A858" width="435" border="1">
    <tr>
      <th colspan="2" align="center">Thêm món ăn</th>
    </tr>
    <tr>
      <td>Name:</td>
      <td><input type="text" name="txtten" id="txtname" value="" /></td>
    </tr>
    <tr>
      <td>Nguồn gốc:</td>
      <td><input type="text" name="txtnguongoc" id="txtnguongoc" value="" /></td>
    </tr>
    <tr>
      <td>Chi tiết:</td>
      <td><textarea name="txtchitiet" id="txtchitiet" cols="45" rows="5" ></textarea></td>
    </tr>
    <tr>
      <td>Ảnh:</td>
      <td><input type="text" name="txtanh" id="txtanh" value="<?php if(isset($tenanh)) echo $tenanh; ?>" readonly/></td>
    </tr>
    <tr>
      <td>Khái quát:</td>
      <td><textarea name="txtkhaiquat" id="txtkhaiquat" cols="45" rows="5" ></textarea></td>
    </tr>        
    <tr>
      <td colspan="2" align="center"><input type="submit" style="background:#B5D32E;width:100px;" name="hh" id="button" value="Thêm mới"/></td>
    </tr>
  </table>
  
</form>
