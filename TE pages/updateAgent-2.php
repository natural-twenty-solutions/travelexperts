<?php
	include("functions.php");
	include("Agent.php");
	
		if (isset($_REQUEST["AgtFirstName"]))
	{
		$messages = validate($_REQUEST);
		if ($messages == "")
		{
			$agent = new Agent($_REQUEST["AgentId"],$_REQUEST["AgtFirstName"],$_REQUEST["AgtMiddleInitial"],$_REQUEST["AgtLastName"],$_REQUEST["AgtBusPhone"],$_REQUEST["AgtEmail"],$_REQUEST["AgtPosition"],$_REQUEST["AgencyId"]);
			if (updateAgentObject($agent)) //here instead of passing an array, passing an object
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
		header("Location: updateAgent.php");
	}
	else
	{
		header("Location: updateAgent.php");
	}
	
?>

