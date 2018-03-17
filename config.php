<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		$host = "localhost";
		$username = "jlittle23";
		$pwd = "jlittle23";
		$db_name = "jlittle23";

		$conn = mysql_connect("$host", "$username", "$pwd");

		if (!$conn) {
			die('Cannot connect to server.');
		} else {
			mysql_select_db("$db_name");
			echo "Connection established";
		}
		
	?>

</body>
</html>