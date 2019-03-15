<?php
  include 'header.php';
  date_default_timezone_set("America/Edmonton");
  $hour = date("H");

 ?>
  <main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-shaped pb-50">
        <div class="shape shape-style-2 shape-default">
        </div>

        <div class="container py-lg-md d-flex">
          <div class="col px-0">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="display-3  text-white"><b>
                  <?php
                  //print $hour;
                    if ($hour < 8) {
                      print ("Good Night");
                    } elseif ($hour < 12) {
                      print ("Good Morning");
                    } elseif ($hour < 18 ) {
                      print ("Good Afternoon");
                    } else {
                      print ("Good Evening");
                    }
                   ?></b>
                </h1>
                <h1 class="display-3  text-white">Welcome to Travel Experts
<!-- <span>Exceptional Travel Services</span> -->
                </h1>
                <p class="lead  text-white">Book your next travel, vacation, or cruise with us. We share your passion for exploration, your love of culture and your excitement in discovering new lands. </p>
                <div class="btn-wrapper">
                  <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="btn btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-image"></i></span>
                    <span class="btn-inner--text">Vacation Packages</span>
                  </a>
                  <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-email-83"></i></span>
                    <span class="btn-inner--text">Contact Us</span>
                  </a>
                </div>
              </div>

              <div class="col-lg-6">

                <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselIndicators" data-slide-to="2" class=""></li>
                    <li data-target="#carouselIndicators" data-slide-to="3" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="c-block w-100" src="./IMG/asian1.jpg" style=height:350px; alt="First slide">
                        <div class="carousel-caption">
                          <h3 style=color:white;>Asian Expedition</h3>
                          <p>Vietnam, Thailand, and more!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="./IMG/carib1.jpg" style=height:350px; alt="Second slide">
                        <div class="carousel-caption">
                          <h3 style=color:white;>Caribbean New Year</h3>
                          <p>Celebrate New Years in sun!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="./IMG/europe1.jpg" style=height:350px; alt="Third slide">
                        <div class="carousel-caption">
                          <h3 style=color:white;>European Vacation</h3>
                          <p>Historic and memorable!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="./IMG/poly1.jpg" style=height:350px; alt="Fourth slide">
                        <div class="carousel-caption">
                          <h3 style=color:white;>Polynesian Paradise</h3>
                          <p>Soak in the sun while relaxing on a beach!</p>
                        </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                <!-- <div class="card bg-default shadow border-0">
                  <img src="../IMG/poly2.jpg" class="card-img-top">
                </div> -->

              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>


    <section class="section bg-secondary">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6">
            <div class="card bg-default shadow border-0">
              <img src="./IMG/europe2.jpg" class="card-img-top">
              <blockquote class="card-blockquote">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                  <polygon points="0,52 583,95 0,95" class="fill-default" />
                  <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                </svg>
                <h4 class="display-3 font-weight-bold text-white">Enjoy your vacation</h4>
                <p class="lead text-italic text-white">With our competitive prices, exceptional service, and rewards, you'll find yourself traveling and experiencing more of the world!</p>
              </blockquote>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pl-md-5">

              <h3>Our customers</h3>
              <p class="lead">Searching, booking, and paying for a vacation has never been so easy.</p>
              <p>Take a look around! We provide a comfortable experience to complicated and stressful planning.</p>
              <p>We take pride in providing our customers with the best possible service. Let us help you start your vacation stress-free! </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php
  include 'footer.php';
?>
