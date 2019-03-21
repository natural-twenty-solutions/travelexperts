<?php
session_start();
include 'header.php';
include 'functions.php';

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
              <div class="col-lg-12">
                <h2 class="display-3  text-white"><b>
                  <?php

                    print ('Hello, ');
                    $userid = $_REQUEST['userid'];
                    getAgtFname($userid);


                   ?></b>
                </h2><br>
                <h2 class="display-4  text-white">Welcome to your Agent portal</span>
                </h2>
                <p class="lead text-white">Check your commissions, booking details, and booking history.</p>



                  <br><br><br>
                  <?php

                    getAgtComm($userid);
                    echo "<br><br><br><br>";
                   ?>
              </div>
              <?php
                getAgtOrders($userid);
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
