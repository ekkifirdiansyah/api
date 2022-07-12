<?php

	include 'db.php';
	
	$id = $_POST['id'];
	
	$link->query("DELETE FROM berita_crud WHERE id = '".$id."'");