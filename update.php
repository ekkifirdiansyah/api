<?php

	include 'db.php';
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$subTitle =$_POST['subTitle'];
	$description = $_POST['description'];
	$image = $_POST['image'];
	$publishedTime = $_POST['publishedTime'];
	
	$link->query("UPDATE berita_crud SET title = '".$title."', subTitle = '".$subTitle."', description = '".$description."', image = '".$image."', publishedTime = '".$publishedTime."' WHERE id = '".$id."'");
	
?>