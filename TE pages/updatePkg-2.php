<?php
	include("functions.php");
	include("PackageObj.php");
	
		if (isset($_REQUEST["pkgName"]))
	{
		$messages = validate($_REQUEST);
		if ($messages == "")
		{
			$package = new PackageObj($_REQUEST["pkgId"],$_REQUEST["pkgName"],$_REQUEST["pkgStartDate"],$_REQUEST["pkgEndDate"],$_REQUEST["pkgDesc"],$_REQUEST["pkgPrice"],$_REQUEST["pkgCommission"]);
			if (updatePkgObject($package)) //here instead of passing an array, passing an object
			{
				print("Data updated successfully");
			}
			else
			{
				print("Update failed");
			}
		}
		//add session variable to store the message
		//store the data in the session to load into form
		header("Location: updatePkg.php");
	}
	else
	{
		header("Location: updatePkg.php");
	}
	
?>

