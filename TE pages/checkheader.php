

<?php
if (!isset($_SESSION)) {
  session_start();
  }
if(isset($_REQUEST['userid']) && !empty($_REQUEST['userid']))
  {
    $id = $_REQUEST['userid'];
    include 'headerafterlogin.php';
  } else {

    include 'header.php';
  }
  ?>
