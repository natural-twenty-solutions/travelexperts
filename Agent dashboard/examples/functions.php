<?php
$host = 'localhost';
$user = 'peng';
$pwd = 'travelexperts';
$db = 'travelexperts';

function connectDB ($host,$user,$pwd,$db) {

  $mysqli = mysqli_connect ($host,$user,$pwd,$db);
  if (mysqli_connect_error())
  {
    print("Error: " . mysqli_connect_error());
    exit();
  }
    return $mysqli;
}

function selectAgents($mysqli){
  $sql = "SELECT AgentId, AgtFirstName, AgtLastName FROM agents";
  $result = $mysqli->query($sql);
  $agents = "<select name = 'AgentID' onchange='getAgent(this.value)'>";
  $agents .= "<option value=''>Select an Agent</option>";
  while ($row = $result->fetch_row()) {
    $agents .="<option value=$row[0]>$row[1] $row[2]</option>";
  }
  $agents .= "</select>";
  return $agents;
}


 ?>
