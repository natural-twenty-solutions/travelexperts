<?php
 	
	include 'header.php';
	include "variables.php";
	include "functions.php";

?>
  <main>
	<script>
						
			function displaywindow(pkgId, pkgName, pkgStartDate,pkgEndDate,pkgDesc,pkgPrice,Image)
				{
					window.open("package1.php?pkgId="+pkgId+"&pkgName="+pkgName +"&pkgDesc="+pkgDesc+"&pkgStartDate="+pkgStartDate+"&pkgEndDate="+pkgEndDate+"&pkgPrice="+pkgPrice+"&Image="+Image);		
					
			
				}
	
	</script>



    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-sm section-shaped pb-75">
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
                <a href="contact.php" class="btn btn-lg btn-block btn-white">Contact Us</a>
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
	
	<!--
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
	-->
 
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
 

  <!-- Core -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/popper/popper.min.js"></script>
  <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="../assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.0.1"></script>
</main>
<?php
  include 'footer.php';
 ?>
