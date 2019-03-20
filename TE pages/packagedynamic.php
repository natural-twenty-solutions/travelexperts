<?php
<<<<<<< HEAD:TE pages/packagedynamic.php
 	
	include 'header.php';
	include "variables.php";
	include "functions.php";

?>
  <main>
	<script>
			function displaywindow(index)
				{
					var win="package"+index+".php"
					window.open(win);			
					
			
				}
			
		
		</script>
	</script>
=======
  ob_start();
  session_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();
    $title = "Vacation Packages";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
    echo $buffer;

  include 'header.php';
  require_once("dbcontroller.php");
  $db_handle = new DBController();

  if(!empty($_GET["action"])) {
  switch($_GET["action"]) {
>>>>>>> 2e72d67729ddb0c47a8d126fbe1dc60ee35ca4ff:TE pages/package.php

  	case "add":
  		if(!empty($_POST["quantity"])) {
  			$productByCode = $db_handle->runQuery("SELECT * FROM packages WHERE PackageId='" . $_GET["code"] . "'");
  			$itemArray = array($productByCode[0]["PackageId"]=>array('name'=>$productByCode[0]["PkgName"],
        'code'=>$productByCode[0]["PackageId"],
        'quantity'=>$_POST["quantity"],
        'price'=>$productByCode[0]["PkgBasePrice"],
        'image'=>$productByCode[0]["image"]));

  			if(!empty($_SESSION["cart_item"])) {
  				if(in_array($productByCode[0]["PackageId"],array_keys($_SESSION["cart_item"]))) {
  					foreach($_SESSION["cart_item"] as $k => $v) {
  							if($productByCode[0]["PackageId"] == $k) {
  								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
  									$_SESSION["cart_item"][$k]["quantity"] = 0;
  								}
  								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
  							}
  					}
  				} else {
  					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
  				}
  			} else {
  				$_SESSION["cart_item"] = $itemArray;
  			}
  		}
  	break;

<<<<<<< HEAD:TE pages/packagedynamic.php
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
        
      <!-- Introduction -->

        <div class="container py-lg-md d-flex">
          <div class="col px-0">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="display-3  text-white">Welcome to Travel Experts
                  <span>Exceptional Travel Services</span>
                </h1>
                <p class="lead  text-white">Book your next travel, vacation, or cruise with us. We share your passion for exploration, your love of culture and your excitement in discovering new lands. </p>
                <div class="btn-wrapper">
                  <a href="#packages" class="btn btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-image"></i></span>
                    <span class="btn-inner--text">Vacation Packages</span>
                  </a>
                  <a href="contact.php" class="btn btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-email-83"></i></span>
                    <span class="btn-inner--text">Contact Us</span>
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
     
  -->
  <!-- packages starts here -->
    <section class="section section-lg " id="packages">
      <div class="container">
        <div class="row justify-content-center text-center mb-lg">
          <div class="col-lg-8">
            <h2 class="display-3">Travel Packages</h2>
            <p class="lead text-muted">We share your passion for exploration, your love of culture and your excitement in discovering new lands.</p>
          </div>
        </div>
        <div class="row ">
		<?php listPkg() ?>
		 <!-- package begins 
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 justify-content-center">
           <div class="px-4">
					<div class="hvr-buzz">
						<img title="Celebrate New Year on Carribbean Cruise" src="./assets/img/theme/pkg-1-small.jpg" class="rounded-circle img-center  img-fluid shadow shadow-lg--hover" style="width: 200px; height:120px" onclick="displaywindow('1')" />
					</div>
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">Carribbean Cruise</span> -->
                <!--  <small class="h6 text-muted">from $3300</small>  -->
           <!--     </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-warning btn-icon-only rounded-circle">
                    <i class="fa fa-image"></i>
                  </a>
                  <a href="#" class="btn btn-warning btn-icon-only rounded-circle">
                    <i class="fa fa-share"></i>
                  </a>
                  <a href="#" class="btn btn-warning btn-icon-only rounded-circle">
                    <i class="fa fa-shopping-cart"></i>
                  </a>
				  
                </div>
              </div>
            </div>
			</br></br>
          </div>
		 
		 
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 justify-content-center">
            <div class="px-4">
					<div class="hvr-buzz">
						<img title="Polynesia Paradise" src="./assets/img/theme/pkg-2-small.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px; height:120px" onclick="displaywindow('2')" />
					</div>
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">Polynesia Paradise</span>
               
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                    <i class="fa fa-image"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                    <i class="fa fa-share"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                    <i class="fa fa-shopping-cart"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
					<div class="hvr-buzz">
						<img title="Asian Expedition" src="./assets/img/theme/pkg-3-small.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px; height:120px" onclick="displaywindow('3')" />
					</div>
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">Asian Expedition</span>
               
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                    <i class="fa fa-image"></i>
                  </a>
                  <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                    <i class="fa fa-share"></i>
                  </a>
                  <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                    <i class="fa fa-shopping-cart"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
		  
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
					<div class="hvr-buzz">
						<img title="European Vacation" src="./assets/img/theme/pkg-4-small.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px; height:120px" onclick="displaywindow('4')" />
					</div>
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">European Vacation</span>
                
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-image"></i>
                  </a>
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-share"></i>
                  </a>
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-shopping-cart"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
		 
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
					<div class="hvr-buzz">
						<img title="European Vacation" src="./assets/img/theme/pkg-4-small.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px; height:120px" onclick="displaywindow('4')" />
					</div>
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">European Vacation</span>
               
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-image"></i>
                  </a>
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-share"></i>
                  </a>
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-shopping-cart"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
		 
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
					<div class="hvr-buzz">
						<img title="European Vacation" src="./assets/img/theme/pkg-4-small.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px; height:120px" onclick="displaywindow('4')" />
					</div>
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">European Vacation</span>
               
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-image"></i>
                  </a>
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-share"></i>
                  </a>
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-shopping-cart"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
		  
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
					<div class="hvr-buzz">
						<img title="European Vacation" src="./assets/img/theme/pkg-4-small.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px; height:120px" onclick="displaywindow('4')" />
					</div>
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">European Vacation</span>
                
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-image"></i>
                  </a>
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-share"></i>
                  </a>
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-shopping-cart"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
		  <!-- one package ends -->
		 -->
        </div>
      </div>
    </section>

    <section class="section section-lg pt-0">
      <div class="container">
        <div class="card bg-gradient-warning shadow-lg border-0">
          <div class="p-5">
            <div class="row align-items-center text-center justify-content-center">
              <div class="col-lg-8">
                <h3 class="text-white">Why Book Your Group Trip With Us?</h3>
                <p class="lead text-white mt-3">You'll get all of the discounts that comes with booking as a large group in addition to the following perks which are exclusive to Travel Experts.</p>
              </div>
              <div class="col-lg-3 ml-lg-auto">
                <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-lg btn-block btn-white">Download HTML</a>
              </div>
            </div>
          </div>
		  
        </div>
	
		
			<!-- group package features-->
		 
		  <div class="container">
		   <div class="p-5">
			<div class="row align-items-bottom text-center justify-content-bottom">
			  <div class="col-lg-4 ">
				<img src="./assets/img/theme/GroupTravel.png" alt="Rounded image" class="img-fluid rounded shadow" style="width: 150px;">
				<h5 class="text-dark mt-3">Free Group Photos</h5>
				<p class="text-dark mt-3"> corporate groups get FREE group photos.</p>
				
			  </div>
			  <div class="col-lg-4">
				<img src="./assets/img/theme/TravelAgents.png" alt="Rounded image" class="img-fluid rounded shadow" style="width: 150px;">
				<h5 class="text-dark mt-3">Dedicated Travel Agents</h5>
				<p class="text-dark mt-3"> Dedicated Group Travel Expert to manage your trip.</p>
			  </div>
			  <div class="col-lg-4">
				
				<img src="./assets/img/theme/AirMiles.png" alt="Rounded image" class="img-fluid rounded shadow" style="width: 150px;">
				<h5 class="text-dark mt-3">Air Miles</h5>
				<p class="text-dark mt-3"> Earn Extra Air Miles by booking group packages with us.</p>
			  </div>
			 
			</div>
		   </div>
		  </div>
		
		<!-- group package features ends here -->
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
 
	<!--
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
-->
<!--   
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
	-->
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
=======
  	case "remove":
  		if(!empty($_SESSION["cart_item"])) {
  			foreach($_SESSION["cart_item"] as $k => $v) {
  					if($_GET["code"] == $k)
  						unset($_SESSION["cart_item"][$k]);
  					if(empty($_SESSION["cart_item"]))
  						unset($_SESSION["cart_item"]);
  			}
  		}
  	break;

  	case "empty":
  		unset($_SESSION["cart_item"]);
  	break;
  }
  }

  function my_shopping_cart_total_product_count() {
      $product_count = 0;

      if ( isset( $_SESSION['cart_item'] ) ) {
          $product_count = array_sum( array_column( $_SESSION['cart_item'], 'quantity' ) );
      }

      return $product_count;
  }

?>

<body>
  <div class="position-relative">
    <section class="section section-lg section-shaped pb-25 bg-primary">
      <div class="shape shape-style-2 shape-default">
      </div>
    </section>
  </div>



  <div id="product-grid">
  <div class="txt-heading">Products</div>
  <div class="row">
      <div class="col-lg-11"></div>
      <div class="col-lg-1">
      <a href="..\TE pages\shoppingcarts.php">CART <span class="badge"><?php echo my_shopping_cart_total_product_count(); ?></span></a>
>>>>>>> 2e72d67729ddb0c47a8d126fbe1dc60ee35ca4ff:TE pages/package.php
      </div>
  </div>
  <div class="container"></div>
  <?php
  $product_array = $db_handle->runQuery("SELECT * FROM packages ORDER BY PackageId ASC");
  if (!empty($product_array)) {
  foreach($product_array as $key=>$value){
  ?>
  <div class="product-item" align="center">
    <form method="post" action="package.php?action=add&code=<?php echo $product_array[$key]["PackageId"]; ?>">
    <div class="product-image"><img height="100%" width="100%" src="<?php echo $product_array[$key]["image"]; ?>"></div>
    <div class="product-tile-footer">
    <div class="product-title"><?php echo $product_array[$key]["PkgName"]; ?></div>
    <div class="product-price"><?php echo "$".$product_array[$key]["PkgBasePrice"]; ?></div>
    <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
    </div>
   </form>
  </div>
    <?php
     }
    }
    ?>
</div>


<?php
  include 'footer.php';
?>
