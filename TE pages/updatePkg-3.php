<?php
	include("functions.php");
	
	
		if (isset($_REQUEST["pkgId"]))
	{
		$messages = validate($_REQUEST);
		$package = intval($_REQUEST["pkgId"]);
		deletePkg($package);
		//if ($messages == "")
		//{
		//	$package = intval($_REQUEST["pkgId"]);
		//	if (deletePkg($package)) 
		//	{
		//		print("Data deleted successfully");
		//	}
		//	else
		//	{
		//		print("delete failed");
		//	}
		//}
		//add session variable to store the message
		//store the data in the session to load into form
		header("Location: updatePkg.php");
	}
	else
	{
		header("Location: updatePkg.php");
	}
	
?>

