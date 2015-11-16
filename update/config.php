	<?php
		$dbServer = 'localhost';
		$dbUser = 'root';
		$dbPass = '';
		$dbName	= 'jobset';

		$conn = new mysqli($dbServer, $dbUser, $dbPass, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	?>