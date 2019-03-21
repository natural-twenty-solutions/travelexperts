<?php

if (!isset($_SESSION)) {
  session_start();
  }

  $id='';
  if(isset($_REQUEST['userid']) && !empty($_REQUEST['userid']))
    {
      $id = $_REQUEST['userid'];
    }
?>
 <!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <meta name="robots" content="noindex,follow" />
  <title>Welcome to Travel Experts</title>
  <!-- Favicon -->
  <link href="../img/photo5.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../assets/css/argon.css?v=1.0.1" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="../assets/css/docs.min.css" rel="stylesheet">
  <!-- Hover CSS -->
  <link type="text/css" href="../assets/css/hover.css" rel="stylesheet">
  <!-- Our stylesheet CSS -->
  <link type="text/css" href="../TE pages/css/style.css" rel="stylesheet">
  <!-- jQuery JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="heading mr-lg-5" <?php echo 'href="landing.php?userid='.$id.'"' ?>  style="color:white;">
          <img src=""><b>Travel Experts</b>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a <?php echo 'href="landing.php?userid='.$id.'"' ?> >
                  <img src=""><b>Travel Experts</b>
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" <?php echo 'href="landing.php?userid='.$id.'"' ?> >Home</a>
            </li>

             <li class="nav-item">
               <a class="nav-link nav-link-icon" <?php echo 'href="package.php?userid='.$id.'"' ?> >Packages</a>
             </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" <?php echo 'href="contact.php?userid='.$id.'"' ?> >Contact Us</a>
            </li>

          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                <i class="fa fa-instagram"></i>
                <span class="nav-link-inner--text d-lg-none">Instagram</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                <i class="fa fa-twitter-square"></i>
                <span class="nav-link-inner--text d-lg-none">Twitter</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" <?php echo 'href="contact.php?userid='.$id.'"' ?> >Logout</a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a <?php echo 'href="customeraccount.php?userid='.$id.'"' ?> target="_blank" class="btn btn-neutral btn-icon" data-toggle="tooltip" title="Account">
              <i class="fa fa-user"></i>
                <span class="nav-link-inner--text">Account</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="btn btn-icon btn-2 btn-neutral" <?php echo 'href="..\TE pages\shoppingcarts.php?userid='.$id.'"' ?>  target="_blank" data-toggle="tooltip" title="Your vacation cart" >
                <span class="btn-inner--icon">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </span>
                <span class="nav-link-inner--text d-lg-none">Cart</span>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
