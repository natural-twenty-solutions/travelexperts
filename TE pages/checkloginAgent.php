<?php
  session_start();
  $userid = $_SESSION['userid'];

	if (isset($_REQUEST["userid"]))
	{
    $sql = "SELECT password FROM agents WHERE userid=?";
    $mysqli = new mysqli("localhost","n20","0000",'travelexperts');

    if (mysqli_connect_error())
  	{
  		print("Error: " . mysqli_connect_error());
  		exit();
  	}
    $userid = $_REQUEST['userid'];

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s",$_REQUEST["userid"]);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_row()) {
      if($row[0] != $_REQUEST["password"]) {
        $_SESSION['message'] = 'User ID or Password is incorrect';
        //$mysqli->close();
        header('Location: loginAgent.php');
        exit();

      } else {
        $_SESSION["loggedin"] = True;

        if(isset($_SESSION['returnpage'])) {
          $returnpage = $_SESSION["returnpage"];
        } else {
          $returnpage = "../TE pages/agentaccount.php?userid=".$_REQUEST["userid"]."";
        }

        unset($_SESSION["returnpage"]);
        //$mysqli->close();
        header("Location: $returnpage");
      }

    } else {
        $_SESSION['message'] = 'User ID or Password is incorrect';
        header('Location: loginAgent.php');
    }

  } else {
      $_SESSION['message'] = 'You must login first';
      header('Location: loginAgent.php');
    }

    $mysqli->close();
/*
		$users = file("users.txt");
		$userdata = array();
		foreach ($users as $user)
		{
			list($u, $p) = explode(",", $user);
			$userdata[$u] = rtrim($p);
		}
		if (array_key_exists($_REQUEST["userid"], $userdata))
		{
			if ($userdata[$_REQUEST["userid"]] == $_REQUEST["password"])
			{
				$_SESSION["loggedin"] = True;

        if(isset($_SESSION['returnpage'])) {
          $returnpage = $_SESSION["returnpage"];
        } else {
          $returnpage = "secretpage.php";
        }

				unset($_SESSION["returnpage"]);
				header("Location: $returnpage");
			}
 else {
      $_SESSION['message'] = 'User Id or password is incorrect';
      header('Location: signin.php');
    }

  } else {
    header('Location: signin.php');
  }

  */

 ?>
