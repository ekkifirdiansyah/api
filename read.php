<?php

include 'db.php';

	$query = $link->query("SELECT * FROM berita_crud");
	$result = array();
	
	while ($rowData = $query->fecth_assoc()) {
			$result[] = $rowData;
	}
	
	echo json_encode($result);
	
?>