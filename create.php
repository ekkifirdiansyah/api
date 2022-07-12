<?php

	include 'db.php';
	
	$title = $_POST['title'];
	$subTitle = $_POST['subTitle'];
	$description = $_POST['description'];
	$image = $_POST['image'];
	$publishedTime = $_POST['publishedTime'];
	
	$link->query("INSERT INTO berita_crud(title,subTitle,description,image,publishedTime)VALUES('".$title."','".$subTitle."','".$description."','".$image."','".$publishedTime."')");