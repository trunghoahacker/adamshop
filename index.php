<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon" />
<link rel="icon" href="favicon.ico" type="img/x-icon" />
<?php
	$title="ADAM SHOP";
	if(isset($_GET['nav']))
	{$tit = $_GET['nav'];
  	switch($tit)
	{
	case 'lienhe':
	$title="Liên hệ mua hàng";
	break;
	case 'gioithieu':
	$title="Hệ thống ADAM SHOP"; 
	break;
	default:$title=$title;
	}
	}
?>
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>	  
<?php 	
include('site/header.php');
						$nav ='';
						if(isset($_GET['nav']))
						$nav = $_GET['nav'];
						switch($nav)
						{
							case 'home':
							include('site/home.php');
							break;
							case 'gioithieu':
							include('site/gioithieu.php');
							break;
							case 'lienhe':
							include('site/lienhe.php');
							break;
							case 'success':
							include('site/success.php');
							break;
							case 'sanpham':
							include('site/sanpham.php');
							break;
							default:
							include('site/home.php');
							break;
						}
include('site/footer.php');
?>  	   
</body>
</html>