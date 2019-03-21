<?php
class DBController {
	private $host = "localhost";
<<<<<<< HEAD
<<<<<<< HEAD
	private $user = "n20";
	private $password = "0000";
=======
=======
>>>>>>> a9dbdcbd53e96598b6fa7ad17d384da5d7b9a0fe
	private $user = "n20";
	private $password = "0000";
>>>>>>> 2e72d67729ddb0c47a8d126fbe1dc60ee35ca4ff
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
?>
