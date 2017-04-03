<?php

		
	$con = mysql_connect('localhost', 'root', '' );
	mysql_select_db('adamshop', $con);
	mysql_query("SET NAMES 'UTF8'");
	
	$dbo= new PDO("mysql:host=localhost;dbname=adamshop","root","");

?>