<?php
 	
	include 'header.php';
	include "variables.php";
	include "functions.php";

?>

 <main>
 <body>
<section class="section section-shaped">
      <div class="shape shape-style-1 shape-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container py-md">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-5 mb-5 mb-lg-0">
			
			<?php 
			print("<h1 class='text-white font-weight-light'>".$_REQUEST['pkgName']."</h1>");
			print("<p class='lead text-white mt-4'>".$_REQUEST['pkgDesc']."</p>");
			print("<p class='lead text-white mt-4'>"."Duration: ".$_REQUEST['pkgStartDate']." ~ ".$_REQUEST['pkgEndDate']."</p>");
			print("<p class='lead text-black-50 mt-5 font-weight-bold'>"."Price: $".$_REQUEST['pkgPrice']."</p>");
							
			?>
		
            <a href="./shoppingcart.php" class="btn btn-white mt-4">Add to Shopping Cart</a>
          </div>
          <div class="col-lg-6 mb-lg-auto">
            <div class="rounded shadow-lg overflow-hidden transform-perspective-right">
              <div id="carousel_example" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel_example" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <?php 
						print("<img id='img1' class='img-fluid' src='./assets/img/theme/".$_REQUEST['Image']."2.jpg' alt='First slide' />"); 
					?>
                  </div>
                  <div class="carousel-item">
                    <?php 
						print("<img id='img2' class='img-fluid' src='./assets/img/theme/".$_REQUEST['Image']."3.jpg' alt='Second slide' />"); 
					?>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
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
	<!-- Core -->
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/popper/popper.min.js"></script>
  <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="./assets/vendor/headroom/headroom.min.js"></script>
</main>
<?php
  include 'footer.php';
 ?>