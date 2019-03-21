<?php
class DBController {
	private $host = "localhost";
	private $user = "n20";
	private $password = "0000";
	private $database = "travelexperts";
	private $conn;

	function __construct() {
		$this->conn = $this->connectDB();
	}

	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}

	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}

	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;
	}
}

function connectDB () {

  $mysqli = mysqli_connect ('localhost',"n20","0000","travelexperts");
  if (mysqli_connect_error())
  {
    print("Error: " . mysqli_connect_error());
    exit();
  }
    return $mysqli;
}

//get and return customer id---------------------------------------------------------
function getCusID($userid)
{
  $mysqli = connectDB();
  $query = "SELECT CustomerId FROM customers WHERE userid LIKE '$userid'";
  $result = $mysqli->query($query);

  while($row = $result->fetch_assoc()) {
    $id = $row["CustomerId"];
    //echo  $row["CustomerId"];
  }
  mysqli_close($mysqli);
  return $id;
}

//get and return customer first name
function getCusFname($userid)
{
  $mysqli = connectDB();
  $query = "SELECT CustFirstName FROM customers WHERE userid LIKE '$userid'";
  $result = $mysqli->query($query);

  while($row = $result->fetch_assoc()) {
    $fname = $row["CustFirstName"];
    echo  $row["CustFirstName"];
  }

  mysqli_close($mysqli);
  return $fname;
}

//get customer rewards----------------------------------------------------

function getCusRewards($userid)
{
  $mysqli = connectDB();
  $id = getCusID($userid);

  $query = "SELECT  rewards.rwdName, rewards.rewardID, customers_rewards.rwdNumber
 from rewards left join
 customers_rewards on rewards.rewardID = customers_rewards.rewardID WHERE customers_rewards.CustomerId LIKE '$id'";

  //$query = "SELECT RewardID, RwdNumber FROM customers_rewards WHERE CustomerId LIKE '$id'";
  $result = $mysqli->query($query);

//card style
print('<div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card bg-gradient-secondary shadow">
        <div class="card shadow">');
  print("<div class='card-header border-0'>");
  //this is table name
  print("<h3 class='mb-0'>Your Rewards</h3></div>");
  //table style
  print('<div class="table-responsive">');
  print("<table class='table align-items-center table-flush'>");
  print('<thead class="thead-light">');
  //coloumn header
  print('<tr>
        <th scope="col" >Reward Name</th>
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
  print "</table><div class='text-muted text-center'><small>Contact us to redeem your rewards!</small></div></div></div></div></div></div>";

  mysqli_close($mysqli);
}


//function: get and display customer orders------------------------------------------------
function getCusOrders($userid)
{
  $mysqli = connectDB();
  $id = getCusID($userid);


//$query = "SELECT bookingid, bookingDate, BookingNO,TravelerCount,TriptypeID FROM bookings WHERE CustomerId LIKE '$id'";
/*
join table example
----------------
select *
from attribute_vals
where attribute_id in (select id from attributes where name= 'weight');
*/

//join bookingdetails and bookings with same bookingid, on selected customer
  $query = "SELECT bookingdetailid,itineraryNo, TripStart, TripEnd, Description, Destination, baseprice
 from bookingdetails
 where bookingdetailid in (select bookingid from Bookings WHERE CustomerId LIKE '$id') GROUP BY bookingdetailid";


  $result = $mysqli->query($query);

//card style
print('<div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card bg-gradient-secondary shadow">
        <div class="card shadow">');
  print("<div class='card-header border-0'>");
  //this is table name
  print("<h3 class='mb-0'>Your Order history</h3></div>");
  //table style
  print('<div class="table-responsive">');
  print("<table class='table align-items-center table-flush'>");
  print('<thead class="thead-light">');
  //coloumn header
  print('<tr>
        <th scope="col" >BookingID</th>
        <th scope="col" >Itinerary</th>
        <th scope="col" >Trip Start</th>
        <th scope="col" >Trip End</th>
        <th scope="col" >Description</th>
        <th scope="col">Destination</th>
        <th scope="col">Price</th>
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



// ************************************************************



//get and return agent id---------------------------------------------------------
function getAgtID($userid)
{
  $mysqli = connectDB();
  $query = "SELECT AgentId FROM agents WHERE userid LIKE '$userid'";
  $result = $mysqli->query($query);

  while($row = $result->fetch_assoc()) {
    $id = $row["AgentId"];
    //echo  $row["CustomerId"];
  }
  mysqli_close($mysqli);
  return $id;
}

//get and return agent first name
function getAgtFname($userid)
{
  $mysqli = connectDB();
  $query = "SELECT AgtFirstName FROM agents WHERE userid LIKE '$userid'";
  $result = $mysqli->query($query);

  while($row = $result->fetch_assoc()) {
    $fname = $row["AgtFirstName"];
    echo  $row["AgtFirstName"];
  }

  mysqli_close($mysqli);
  return $fname;
}

//get agent commission----------------------------------------------------

function getAgtComm($userid)
{
	$mysqli = connectDB();
	$id = getAgtID($userid);


	// $query = "SELECT bookingdetails.bookingdetailid FROM bookingdetails join bookings ON bookingdetails.bookingId = bookings.bookingid
	//                                   join customers ON bookings.bookingid = customers.customerbookingid";

	 // $query = "SELECT bookingdetailid,itineraryNo, TripStart, TripEnd, Description, Destination, baseprice
	 // from bookingdetails
	 // where bookingdetailid in (select bookingid from Bookings WHERE CustomerId LIKE '$id') GROUP BY bookingdetailid";

	//$query = "SELECT BookingDetailId, ItineraryNo, Description, BasePrice, AgencyCommission FROM bookingdetails";
	//WHERE AgentId in (select AgentId from customers WHERE AgentId LIKE '$id')";

	$query = "SELECT bookingdetailid, itineraryNo, Description, Destination, baseprice, agencycommission
	from bookingdetails
	where bookingid in (select bookingid from Bookings
	where customerid in (select customerid from customers
	where Agentid LIKE '$id'))";



	//$query = "SELECT RewardID, RwdNumber FROM customers_rewards WHERE CustomerId LIKE '$id'";
	$result = $mysqli->query($query);


//card style
print('<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card bg-gradient-secondary shadow">
				<div class="card shadow">');
	print("<div class='card-header border-0'>");
	//this is table name
	print("<h3 class='mb-0'>Your Commission</h3></div>");
	//table style
	print('<div class="table-responsive">');
	print("<table class='table align-items-center table-flush'>");
	print('<thead class="thead-light">');
	//coloumn header
	print('<tr>
				<th scope="col" >Booking Detail ID</th>
				<th scope="col" >ItineraryNo</th>
				<th scope="col" >Description</th>
				<th scope="col" >Destination</th>
				<th scope="col" >Base Price</th>
				<th scope="col">Agency Commission</th>
				</tr></thead>');

	while ($row = mysqli_fetch_assoc($result)) {
		print ("<tr>");
		foreach ($row as $col) {
		print ("<td>$col</td>");
		}
		print "</tr>";
	}
	print "</table><div class='text-muted text-center'><small></small></div></div></div></div></div></div>";

//attempting to display total agency commission
// 	$query = "SELECT agencycommission SUM(agencycommission) FROM bookingdetails";
//
// 	$result = mysql_query($query) or die(mysql_error());
//
// 	// Print out result
// 	while($row = mysql_fetch_array($result)){
// 		echo "Total ". $row['agencycommission']. " = $". $row['SUM(price)'];
// 		echo "<br />";
// 	}
//
  mysqli_close($mysqli);
}



//function: get and display customer orders------------------------------------------------
function getAgtOrders($userid)
{
  $mysqli = connectDB();
  $id = getAgtID($userid);


//$query = "SELECT bookingid, bookingDate, BookingNO,TravelerCount,TriptypeID FROM bookings WHERE CustomerId LIKE '$id'";
/*
join table example
----------------
select *
from attribute_vals
where attribute_id in (select id from attributes where name= 'weight');
*/

//join bookingdetails and bookings with same bookingid, on selected customer
  $query = "SELECT bookingdetailid,itineraryNo, TripStart, TripEnd, Description, Destination, baseprice
 from bookingdetails
 where bookingdetailid in (select bookingid from Bookings WHERE CustomerId LIKE '$id') GROUP BY bookingdetailid";


  $result = $mysqli->query($query);

//card style
print('<div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card bg-gradient-secondary shadow">
        <div class="card shadow">');
  print("<div class='card-header border-0'>");
  //this is table name
  print("<h3 class='mb-0'>Your Order history</h3></div>");
  //table style
  print('<div class="table-responsive">');
  print("<table class='table align-items-center table-flush'>");
  print('<thead class="thead-light">');
  //coloumn header
  print('<tr>
        <th scope="col" >BookingID</th>
        <th scope="col" >Itinerary</th>
        <th scope="col" >Trip Start</th>
        <th scope="col" >Trip End</th>
        <th scope="col" >Description</th>
        <th scope="col">Destination</th>
        <th scope="col">Price</th>
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
