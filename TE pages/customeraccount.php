<?php
session_start();
include 'header.php';
date_default_timezone_set("America/Edmonton");
$hour = date("H");

 ?>
  <main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-shaped pb-250">
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
                    print (', '.$_REQUEST["userid"]);
                   ?></b>
                </h2><br>
                <h2 class="display-3  text-white">Welcome to your Travel Experts account</span>
                </h2>
                <p class="lead  text-white"> We share your passion for exploration, your love of culture and your excitement in discovering new lands.</p>
                <div class="btn-wrapper">
                  <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="btn btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-bullet-list-67"></i></span>
                    <span class="btn-inner--text">Orders</span>
                  </a>
                  <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-money-coins"></i></span>
                    <span class="btn-inner--text">Rewards</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>
    <section class="section section-lg pt-lg-0 mt--200">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                      <i class="ni ni-check-bold"></i>
                    </div>
                    <h6 class="text-primary text-uppercase">Download Argon</h6>
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-primary">design</span>
                      <span class="badge badge-pill badge-primary">system</span>
                      <span class="badge badge-pill badge-primary">creative</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-4">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                      <i class="ni ni-istanbul"></i>
                    </div>
                    <h6 class="text-success text-uppercase">Build Something</h6>
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-success">business</span>
                      <span class="badge badge-pill badge-success">vision</span>
                      <span class="badge badge-pill badge-success">success</span>
                    </div>
                    <a href="#" class="btn btn-success mt-4">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                      <i class="ni ni-planet"></i>
                    </div>
                    <h6 class="text-warning text-uppercase">Prepare Launch</h6>
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-warning">marketing</span>
                      <span class="badge badge-pill badge-warning">product</span>
                      <span class="badge badge-pill badge-warning">launch</span>
                    </div>
                    <a href="#" class="btn btn-warning mt-4">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-md-2">
            <img src="../assets/img/theme/promo-1.png" class="img-fluid floating">
          </div>
          <div class="col-md-6 order-md-1">
            <div class="pr-md-5">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                <i class="ni ni-settings-gear-65"></i>
              </div>
              <h3>Awesome features</h3>
              <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <ul class="list-unstyled mt-5">
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-settings-gear-65"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">Carefully crafted components</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-html5"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">Amazing page examples</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-satisfied"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">Super friendly support team</h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-secondary">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6">
            <div class="card bg-default shadow border-0">
              <img src="../assets/img/theme/img-1-1200x1000.jpg" class="card-img-top">
              <blockquote class="card-blockquote">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                  <polygon points="0,52 583,95 0,95" class="fill-default" />
                  <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                </svg>
                <h4 class="display-3 font-weight-bold text-white">Design System</h4>
                <p class="lead text-italic text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p>
              </blockquote>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pl-md-5">
              <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle mb-5">
                <i class="ni ni-settings"></i>
              </div>
              <h3>Our customers</h3>
              <p class="lead">Don't let your uses guess by attaching tooltips and popoves to any element. Just make sure you enable them first via JavaScript.</p>
              <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <a href="#" class="font-weight-bold text-warning mt-5">A beautiful UI Kit for impactful websites</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section pb-0 bg-gradient-warning">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-lg-2 ml-lg-auto">
            <div class="position-relative pl-md-5">
              <img src="../assets/img/ill/ill-2.svg" class="img-center img-fluid">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="d-flex px-3">
              <div>
                <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                  <i class="ni ni-building text-primary"></i>
                </div>
              </div>
              <div class="pl-4">
                <h4 class="display-3 text-white">Modern Interface</h4>
                <p class="text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-satisfied"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-success">Awesome Support</h5>
                    <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
                    <a href="#" class="text-success">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-warning">Modular Components</h5>
                    <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
                    <a href="#" class="text-warning">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section section-lg">
      <div class="container">
        <div class="row justify-content-center text-center mb-lg">
          <div class="col-lg-8">
            <h2 class="display-3">The amazing Team</h2>
            <p class="lead text-muted">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record maximum.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
              <img src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">Ryan Tompson</span>
                  <small class="h6 text-muted">Web Developer</small>
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-warning btn-icon-only rounded-circle">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#" class="btn btn-warning btn-icon-only rounded-circle">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="#" class="btn btn-warning btn-icon-only rounded-circle">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
              <img src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">Romina Hadid</span>
                  <small class="h6 text-muted">Marketing Strategist</small>
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
              <img src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">Alexander Smith</span>
                  <small class="h6 text-muted">UI/UX Designer</small>
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
              <img src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">John Doe</span>
                  <small class="h6 text-muted">Founder and CEO</small>
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg pt-0">
      <div class="container">
        <div class="card bg-gradient-warning shadow-lg border-0">
          <div class="p-5">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <h3 class="text-white">We made website building easier for you.</h3>
                <p class="lead text-white mt-3">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture.</p>
              </div>
              <div class="col-lg-3 ml-lg-auto">
                <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-lg btn-block btn-white">Download HTML</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg bg-gradient-default">
      <div class="container pt-lg pb-300">
        <div class="row text-center justify-content-center">
          <div class="col-lg-10">
            <h2 class="display-3 text-white">Build something</h2>
            <p class="lead text-white">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record low maximum sea ice extent tihs year down to low ice.</p>
          </div>
        </div>
        <div class="row row-grid mt-5">
          <div class="col-lg-4">
            <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
              <i class="ni ni-settings text-primary"></i>
            </div>
            <h5 class="text-white mt-3">Building tools</h5>
            <p class="text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <div class="col-lg-4">
            <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
              <i class="ni ni-ruler-pencil text-primary"></i>
            </div>
            <h5 class="text-white mt-3">Grow your market</h5>
            <p class="text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <div class="col-lg-4">
            <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
              <i class="ni ni-atom text-primary"></i>
            </div>
            <h5 class="text-white mt-3">Launch time</h5>
            <p class="text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section section-lg pt-lg-0 section-contact-us">
      <div class="container">
        <div class="row justify-content-center mt--300">
          <div class="col-lg-8">
            <div class="card bg-gradient-secondary shadow">
              <div class="card-body p-lg-5">
                <h4 class="mb-1">Want to work with us?</h4>
                <p class="mt-0">Your project is very important to us.</p>
                <div class="form-group mt-5">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                    </div>
                    <input class="form-control" placeholder="Your name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email address" type="email">
                  </div>
                </div>
                <div class="form-group mb-4">
                  <textarea class="form-control form-control-alternative" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
                </div>
                <div>
                  <button type="button" class="btn btn-default btn-round btn-block btn-lg">Send Message</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg">
      <div class="container">
        <div class="row row-grid justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="display-3">Do you love this awesome
              <span class="text-success">Design System for Bootstrap 4?</span>
            </h2>
            <p class="lead">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap project a new look!</p>
            <div class="btn-wrapper">
              <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-primary mb-3 mb-sm-0">Download HTML</a>
            </div>
            <div class="text-center">
              <h4 class="display-4 mb-5 mt-5">Available on these technologies</h4>
              <div class="row justify-content-center">
                <div class="col-lg-2 col-4">
                  <a href="https://www.creative-tim.com/product/argon-design-system" target="_blank" data-toggle="tooltip" data-original-title="Bootstrap 4 - Most popular front-end component library">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/bootstrap.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href=" https://www.creative-tim.com/product/vue-argon-design-system" target="_blank" data-toggle="tooltip" data-original-title="Vue.js - The progressive javascript framework">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href=" https://www.sketchapp.com/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Sketch - Digital design toolkit">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" class="img-fluid opacity-3">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href=" https://www.adobe.com/products/photoshop.html" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Adobe Photoshop - Software for digital images manipulation">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/ps.jpg" class="img-fluid opacity-3">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href=" https://angularjs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Angular - One framework. Mobile &amp; desktop">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" class="img-fluid opacity-3">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href=" https://angularjs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] React - A JavaScript library for building user interfaces">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid opacity-3">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer has-cards">
    <div class="container container-lg">
      <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
          <div class="card card-lift--hover shadow border-0">
            <a href="../examples/landing.html" title="Landing Page">
              <img src="../assets/img/theme/landing.jpg" class="card-img">
            </a>
          </div>
        </div>
        <div class="col-md-6 mb-5 mb-lg-0">
          <div class="card card-lift--hover shadow border-0">
            <a href="../examples/profile.html" title="Profile Page">
              <img src="../assets/img/theme/profile.jpg" class="card-img">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row row-grid align-items-center my-md">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
          <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-dribbble"></i>
          </a>
          <a target="_blank" href="https://github.com/creativetimofficial" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
            <i class="fa fa-github"></i>
          </a>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2018
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/popper/popper.min.js"></script>
  <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="../assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.0.1"></script>
</body>

</html>
