<?php

if (isset($_POST['submit'])) {
  echo '2222';
$userId = $_POST['1'];
$CustEmail=$_POST['2'];
$password=$_POST['3'];

$dbh = mysqli_connect("localhost", "n20", "0000", "travelexperts");
if (!$dbh) {
  echo 'fail to connect to database';
}
echo 'test before';
$sql = "INSERT INTO customers (userId, password,CustEmail) VALUES ('$userId','$password','$CustEmail')";

if(mysqli_query($dbh,$sql)){

header("Location:http://localhost/travelexperts/TE%20pages/landing.php");
}
else {
  echo 'fail';

}
}
