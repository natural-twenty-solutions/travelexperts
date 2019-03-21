<?php
	include("functions.php");
	include("variables.php");
	include("PackageObj.php");
	
	
	
	if (isset($_REQUEST["pkgName"]))
	{
		$messages = validate($_REQUEST);
		$package = new PackageObj(0,$_REQUEST["pkgName"],$_REQUEST["pkgStartDate"],$_REQUEST["pkgEndDate"],$_REQUEST["pkgDesc"],$_REQUEST["pkgPrice"],$_REQUEST["pkgCommission"],$_REQUEST["Image"]);
		insertPkgObject($package);
			
		//if ($messages == "")
		//{
		//	$package = new PackageObj(0,$_REQUEST["pkgName"],$_REQUEST["pkgStartDate"],$_REQUEST["pkgEndDate"],$_REQUEST["pkgDesc"],$_REQUEST["pkgPrice"],$_REQUEST["pkgCommission"]);
		//
		//	if (insertPkgObject($package)) //here instead of passing an array, passing an object
		//	{
		//		echo("Data inserted successfully");
		//	}
		//	else
		//	{
		//		echo("Insert failed");
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

