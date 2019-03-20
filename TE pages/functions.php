<?php
$host = "localhost";
$user = "n20";
$pwd = "0000";
$db = "travelexperts";
$id = '';


function connectDB ($host,$user,$pwd,$db) {

  $mysqli = mysqli_connect ($host,$user,$pwd,$db);
  if (mysqli_connect_error())
  {
    print("Error: " . mysqli_connect_error());
    exit();
  }
    return $mysqli;
}


function getCusID($userid)
{
  $mysqli = mysqli_connect("localhost", "n20", "0000", "travelexperts");
  $query = "SELECT CustomerId FROM customers WHERE userid LIKE '$userid'";
  $result = $mysqli->query($query);

  while($row = $result->fetch_assoc()) {
    $id = $row["CustomerId"];
    //echo  $row["CustomerId"];
  }
  mysqli_close($mysqli);
  return $id;
}


function getCusFname($userid)
{
  $mysqli = mysqli_connect("localhost", "n20", "0000", "travelexperts");
  $query = "SELECT CustFirstName FROM customers WHERE userid LIKE '$userid'";
  $result = $mysqli->query($query);

  while($row = $result->fetch_assoc()) {
    echo  $row["CustFirstName"];
  }

  mysqli_close($mysqli);
  return $result;
}



function getCusRewards($userid)
{
  $mysqli = mysqli_connect("localhost", "n20", "0000", "travelexperts");
  $id = getCusID($userid);


  $query = "SELECT RewardID, RwdNumber FROM customers_rewards WHERE CustomerId LIKE '$id'";
  $result = $mysqli->query($query);

//card style
print('<div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card bg-gradient-secondary shadow">
        <div class="card-body p-lg-5">');
  print("<div class='card-header border-0'>");
  //this is table name
  print("<h3 class='mb-0'>Your Rewards are:</h3></div>");
  //table style
  print('<div class="table-responsive">');
  print("<table class='table align-items-center table-flush'>");
  print('<thead class="thead-light">');
  //coloumn header
  print('<tr>
        <th scope="col" >RewardID</th>
        <th scope="col">Reward Number</th>
        </tr></thead>');

  while ($row = mysqli_fetch_assoc($result)) {
    print ("<tr>");
    foreach ($row as $col) {
      print ("<td>$col</td>");
    }
    print "</tr>";
  }
  print "</table></div></div></div></div></div>";

  mysqli_close($mysqli);
}
 ?>
