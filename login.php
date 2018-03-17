<!DOCTYPE html>
<html>
<head>
	<title>Login OK?</title>
	<link rel="stylesheet" href="./styles.css">
</head>

<body>
<?php
	include("config.php");
	$username=$_POST["username"];
	$enteredpwd=$_POST["password"];
	
	if(empty($username)||empty($enteredpwd)){
		header('Location: home.html');
		die();
	}
	
	
	$sql = "SELECT * FROM project3 WHERE Username='$username'"; 
	
	$result = mysql_query($sql);
	
	if(mysql_num_rows($result)>0){
		while($row = mysql_fetch_assoc($result)){
			$databasepwd=$row["Password"];
			$name=$row["Name"];
			$icon =$row["Icon"];
			$background=$row["Background"];
			//Testing purposes below
			echo " $enteredpwd ";
			echo " ";
			echo " $databasepwd ";
			echo "<br/>";
		}
	}
	if($enteredpwd==$databasepwd){
		echo "login OK!";
		session_start(); 
		$_SESSION['Username'] = $username;
		$_SESSION['Name'] = $name;
		header('Location: user_home.php');
	}else{
		echo "Login Failed ";
		print("<a href='home.html'>Return to the homepage</a>");
	}
		
?>
</body>
</html>