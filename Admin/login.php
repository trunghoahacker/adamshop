<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Login</title>
<?php
	session_start();
?>

<script language="javascript">
	function checklogin()
	{
		var username = document.forms[0].txtusername.value;
		var password = document.forms[0].txtpassword.value;
		
		if(username == '')
		{
			alert('Bạn cần nhập username !');
			document.forms[0].txtusername.focus();
			return false;
		}
		
		if(password == '')
		{
			alert('Bạn cần nhập password !');
			document.forms[0].txtpassword.focus();
			return false;
		}
		
	}
</script>
</head>
<body style="background:#42B782">
<form id="form1" name="form1" method="post" action="" onsubmit="return checklogin();">
  <table align="center" style="margin-top:100px" width="300" border="0">
    <tr>
      <td colspan="2" align="center" bgcolor="#3A47D7">Login</td>
    </tr>
    <tr>
      <td width="91">Username:</td>
      <td width="193"><input type="text" name="txtusername" id="txtusername" /></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="password" name="txtpassword" id="txtpassword" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="login" id="btnLogin" value="Login" onclick="checklogin()" />
      <input type="reset" name="Reset" id="button" value="Nhập lại" /></td>
    </tr>
  </table>
</form>
<div style="text-align:center;color:#E83117;font-size:18px;">
<?php
 	$con = mysql_connect('localhost', 'root', '' );
	mysql_query("SET character_set_results=utf8", $con);
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db('gioi_thieu_mon_an', $con);
	
	if(isset($_POST['login'])){
		$username = $_POST['txtusername'];
		$password = $_POST['txtpassword'];
	
		$sql = "select * from tai_khoan where name = '" . $username . "' and pass = '" . $password . "'";
		
		$result = mysql_query($sql);
	
		$total = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		
		if($total > 0)
		{
			$_SESSION['tendangnhap'] = $username;
			$_SESSION['user'] = $row['name'];
			header("Location: index.php");
		}
		else
		{	
			session_destroy();
			echo "Tài khoản không đúng !";
		}
	}
?>
</div>
</body>
</html>