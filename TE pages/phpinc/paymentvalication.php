<?php

if(isset($_POST['check_out'] )){
  //$total = $_POST['total_price'];
  session_start();
  //$_SESSION[total_price] = $total;
  header("Location: payment.php");
}

 ?>
