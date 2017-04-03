<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="../css/admin/css.css"/>
<?php
	session_start();
?>
<script language="javascript" type="text/javascript">
	function update(){
		if(document.forms[1].txtanh.value==""){
			alert("Bạn cần chọn ảnh !");
			return false;
		}		
		if(document.forms[1].txtten.value ==""){
			alert("Bạn cần nhập tên món !");
			document.forms[1].txtten.focus();
			return false;
		}
		if(document.forms[1].txtnguongoc.value==""){
			alert("Bạn cần nhập nguồn gốc !");
			document.forms[1].txtnguongoc.focus();
			return false;
		}
		if(document.form1.txtchitiet.value==""){
			alert("Bạn cần nhập chi tiết món !");
			document.form1.txtchitiet.focus();
			return false;
		}
		if(document.form1.txtkhaiquat.value==""){
			alert("Bạn cần nhập khái quát !");
			document.form1.txtkhaiquat.focus();
			return false;
		}										
	}
</script>
<script language="javascript" type="text/javascript">
	function kiemtratin(){
		if(document.form2.txtanh.value==""){
			alert("Bạn cần chọn ảnh !");
			return false;
		}		
		if(document.form2.txttieude.value ==""){
			alert("Bạn cần nhập tiêu đề !");
			document.form2.txttieude.focus();
			return false;
		}
		if(document.form2.txtthongtin.value==""){
			alert("Bạn cần nhập nội dung !");
			document.form2.txtthongtin.focus();
			return false;
		}
		if(document.form2.txtkhaiquat.value==""){
			alert("Bạn cần nhập khái quát !");
			document.form2.txtkhaiquat.focus();
			return false;
		}
	}
</script>
</head>

<body>
	
	<header>
    	<div id="login">
			<?php if(isset($_SESSION['user'])){
             echo 'Wellcome to: ' . $_SESSION['user'] . ' !';
             
            }
            else{
            session_destroy();
            	header('Location:login.php');
            }
            ?>
        /<a href="login.php"> Đăng xuất</a>
		</div>
    	<div id="menu">
        	<ul>
            	<a href="?index=monan"><li style="border-left:1px solid #999;width:180px;">Quản lý sản phẩm</li></a>
                <a href="?index=tintuc"><li>Quản lý tin tức</li></a>
                <a href="?index=gopy"><li>Quản lý góp ý</li></a>
            </ul>
        </div>
    </header>
    <div id="wrapper">
        <div id="content2">
			<?php 
				$index="";
				if(isset($_GET['index']))
				$index=$_GET['index'];
				switch($index){
					case "suatin":
					include_once("site/suatin.php");
					break;					
					case "suamonan":
					include_once("site/suamonan.php");
					break;
					case "monan":
					include_once("site/quanlymonan.php");
					break;					
					case "tintuc":
					include_once("site/quanlytintuc.php");
					break;
					case "themmonan":
					include_once("site/themmon.php");
					break;
					case "themtin":
					include_once("site/themtin.php");
					break;
					case "chitietmon":
					include_once("site/chitietmon.php");
					break;
					case "chitiettin":
					include_once("site/chitiettin.php");
					break;																									
					default:
					include_once("site/quanlygopy.php");
					break;				
				}
			?>
        </div>
        <footer>
        </footer>
    </div>
</body>
</html>