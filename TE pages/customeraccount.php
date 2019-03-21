<?php
session_start();
<<<<<<< HEAD
include 'header.php';
=======
include 'checkheader.php';
>>>>>>> bd9643dbb944058f413bc65af51c94609b917f0f
include 'functions1.php';

$host = "localhost";
$user = "n20";
$pwd = "0000";
$db = "travelexperts";
$mysqli = connectDB($host,$user,$pwd,$db);

 ?>
  <main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-shaped">
        <div class="shape shape-style-1 shape-default">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="container py-lg-md d-flex">
          <div class="col px-0">
            <div class="row text-center justify-content-center">
              <div class="col-lg-10">
                <h2 class="display-3  text-white"><b>
                  <?php

                    print ('Hello, ');
                    $userid = $_REQUEST['userid'];
                    getCusFname($userid);


                   ?></b>
                </h2><br>
                <h2 class="display-4  text-white">Welcome to your Travel Experts account</span>
                </h2>
                <p class="lead text-white"> We share your passion for exploration, your love of culture, and your excitement in discovering new lands.</p>


                <div class="btn-wrapper">
                  <a href="" class="btn btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-money-coins"></i></span>
                    <span class="btn-inner--text">Rewards</span>
                  </a>
                  <a href="" class="btn btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-bullet-list-67"></i></span>
                    <span class="btn-inner--text">Orders</span>
                  </a>

                </div>
                  <br><br><br>
                  <?php

                    getCusRewards($userid);
                    echo "<br><br><br><br>";
                   ?>
              </div>
              <?php
                getCusOrders($userid);
               ?>
            </div>
          </div>
        </div>
      </div>
      </section>

      <!-- 1st Hero Variation -->
  </main>
<?php
include 'footer.php';
 ?>
