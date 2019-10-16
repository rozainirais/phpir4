<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'phpir');
   define('DB_PASSWORD', 'PhpIR123');
   define('DB_DATABASE', 'phpir');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   // Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
	//echo "Connected successfully";
?>
