<?php
  session_start();
  
	if(! $_SESSION["loggedin"])
	{
		$_SESSION["message"]="You must login first!";
		$_SESSION["returnpage"]="package1.php";
		header("Location: login.php");
	}
	

	
	include 'header.php';
	include "variables.php";
	include "functions.php";

	$mysqli = connectDB($host, $user, $pwd, $db);

	
?>

	</body>
</html>