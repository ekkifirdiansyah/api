<?php

	$hostname = 'localhost';
	$username = 'root';
	$pass = '';
	$dbname = 'uas_news';
	
	$link = new mysqli($hostname,$username,$pass,$dbname);
	
	if ($link->connect_errno) {
		printf('failed database connect', $link->connect_errno);
		exit();
	}
?>