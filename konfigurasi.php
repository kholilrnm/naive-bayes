<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	
	$con = mysql_connect("$host","$user","$pass");
	$db = mysql_select_db("diasnetdb");
	
	session_start();
?>