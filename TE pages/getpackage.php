
<?php
	include("variables.php");
	include("functions.php");
	
	if(isset($_REQUEST["pkgId"])) 	//check if received data , if received, then continue to build JSON
	{
		$mysqli=connectDB($host, $user, $pwd, $db); //pass the variable from variables.php to connectDB function
		if (mysqli_connect_error())
			{
				print("Error:".mysqli_connect_error());
				exit;
			}
		$sql="SELECT * FROM packages WHERE PackageId=?"; // SQL statement
		$stmt=$mysqli->prepare($sql); 	//prepare
		$stmt->bind_param("i",$_REQUEST["pkgId"]);
		$stmt->execute();
		$result=$stmt->get_result();
		while ($row=$result->fetch_assoc())
		{
			//print_r($row);
			print("{\"pkgId\":$row[PackageId], 
					\"pkgName\":\"$row[PkgName]\",
					\"pkgStartDate\":\"$row[PkgStartDate]\",
					\"pkgEndDate\":\"$row[PkgEndDate]\",
					\"pkgDesc\":\"$row[PkgDesc]\",
					\"pkgPrise\":\"$row[PkgBasePrice]\",
					\"pkgCommission\":\"$row[PkgAgencyCommission]}" );
				
				
		}
		
		$mysqli->close();
	}

?>