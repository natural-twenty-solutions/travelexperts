<?php
  session_start();

	if (isset($_REQUEST["userid"]))
	{
    $sql = "SELECT password FROM customers WHERE userid=?";
    //$mysqli = new mysqli("localhost","n20","0000",'travelexperts');
	//connie testing only
	$mysqli = new mysqli("localhost","n20","0000",'travelexperts');
    if (mysqli_connect_error())
  	{
  		print("Error: " . mysqli_connect_error());
  		exit();
  	}

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s",$_REQUEST["userid"]);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_row()) {
      if($row[0] != $_REQUEST["password"]) {
        $_SESSION['message'] = 'User ID or Password is incorrect';
        header('Location: login.php');
        exit();

      } else {
        $_SESSION["loggedin"] = True;

        if(isset($_SESSION['returnpage'])) {
          $returnpage = $_SESSION["returnpage"];
        } else {
          $returnpage = "customeraccount.php?userid=".$_REQUEST["userid"]."";
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
 ?>
