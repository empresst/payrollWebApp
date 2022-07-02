<?php
	$conn = new mysqli('localhost', 'id19143806_root', 'PMSroot@1234', 'id19143806_pms');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>