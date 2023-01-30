<?php
	if($_SERVER['HTTP_HOST'] ==  'localhost') {
			$host = "localhost";
			$dbusername="root";
			$dbpassword="";
			$dbname="administration";
		} else {
			$host = "localhost";
			$dbusername="server user name";
			$dbpassword="server password";
			$dbname="administration";
		}
	$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
?>