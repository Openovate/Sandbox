	<?php
		$dbServer = 'localhost';
		$dbUser = 'root';
		$dbPass = '';
		$dbName	= 'jobset';

		mysql_connect("$dbServer", "$dbUser", "$dbPass") or die ("Cannot connect to the server.");
		mysql_select_db("$dbName") or die ("Cannot connect to the database.");

	?>