<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require '../lib/PHPMailerAutoload.php';
$from = 'testeradamshop@gmail.com';
$to = 'adamshop@gmail.com';
$subject='Phản hồi mới từ adamshop.com';
$body ='Tên khách hàng :' .$_POST['Name']. '<br> Số điện thoại :'.$_POST['Mobile'] . '<br> Email :' .$_POST['Email']. '<br> Chủ đề:' .$_POST['Subject']. '<br> Message :' .$_POST['Message'];
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 2;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->IsHTML(true);

$mail->Username = "testeradamshop@gmail.com";
$mail->Password = "Hoagiang14011996";
$mail->SetFrom($from);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($to);
if(!$mail->Send())
{
	echo "Thất bại" .$mail->ErrorInfo;	
}
else
{
	echo "Thành công";	
}

include ("Connect.php");
$charset=mysql_query('set names utf8');
$ds = $dbo->prepare("INSERT INTO `lienhe`(`name`, `email`, `mobile`, `subject`, `massage`) VALUES (N'".$_POST['Name']."',N'".$_POST['Email']."',N'".$_POST['Mobile']."',N'".$_POST['Subject']."',N'".$_POST['Message']."')");
$ds->execute();



header("Location:../index.php?nav=success");
