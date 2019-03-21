<?php
  ob_start();
  session_start();

  if(! $_SESSION["loggedin"])
	{
		$_SESSION["message"]="You must login first!";
		$_SESSION["returnpage"]="updatePkg.php";
		header("Location: login.php");
	}



    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();
    $title = "updatePkg";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
    echo $buffer;




	include "variables.php";
	include "functions.php";

	$mysqli = connectDB($host, $user, $pwd, $db);


?>


<main>
	<script>
					var req;
					var package;
					function getPackage(pkgId)
						{
							console.log("getPkg: " + pkgId);
							req = new XMLHttpRequest();
							var url = "/getpackage.php?pkgId=" + pkgId;
							req.open("get", url);
							req.onreadystatechange=handleResponse;
							req.send(null);
							console.log(url);
						}

					var handleResponse = function(){
					console.log("handleResponse"+req.readyState);
							if (req.readyState == 4)
							{

								package = JSON.parse(req.responseText);
								console.log(package.pkgDesc);
								document.getElementById("pkgId").value = package.pkgId;
								document.getElementById("pkgName").value = package.pkgName;

								document.getElementById("pkgDesc").value = package.pkgDesc;

								document.getElementById("pkgStartDate").value = package.pkgStartDate;
								document.getElementById("pkgEndDate").value = package.pkgEndDate;
								document.getElementById("pkgPrice").value = package.pkgPrice;
								document.getElementById("pkgCommission").value = package.pkgCommission;
								document.getElementById("Image").value = package.Image;

							}
						}

	</script>
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 bg-gradient-default">
      <span></span>

    </div>

    <section class="section section-components">
      <div class="container">
        <div class="row justify-content-center">

			<!-- header starts here-->


		   <div class="p-3">
			<div class="row align-items-top text-center justify-content-center">
				<h3 class="text-white font-weight-bold mt-md">Select a package to update or delete.</h3> </br>
			</div>
			<div class="row align-items-top text-center justify-content-center">
				<h4 class="text-white font-weight-bold mt-md">To insert, leave this field blank.</h4>
			</div>



		   </div>


		<!-- header ends here -->
          <div class="col-lg-8">
            <!-- Tabs with icons -->

            <div class="card shadow">
              <div class="card-body ">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">



                  <div class="card-body px-lg-5 py-lg-5">

					<!--	<span>
							<h4>Select a package to update or delete. To insert, leave this field blank.</h4>
						  </span> -->

					   <form role="form" method="get" action = "updatePkg-2.php">
							<input type="hidden" name="pkgId" id="pkgId" />
							<div class="form-group mb-3">

								<?php print(selectPkgs($mysqli));?>
							</div>
							<div class="form-group mb-3">
								<small class="d-block text-uppercase font-weight-bold mb-3">Package Name</small>
								<input class="form-control" type="text" name="pkgName" id="pkgName" value="pkgName">

							</div>
							<div class="form-group mb-3">

									<small class="d-block text-uppercase font-weight-bold mb-3">Package Description</small>
								   <input class="form-control" placeholder="pkgDesc" type="text" name="pkgDesc" id="pkgDesc" >

							 </div>
							 <div class="col-md-auto mt-1 mt-md-1">
								<small class="d-block text-uppercase font-weight-bold mb-3">Date range</small>
									<div class="input-daterange  row align-items-left">
									<div class="col">
									<div class="form-group focused">
									<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
									</div>
									<input class="form-control" name='pkgStartDate' id='pkgStartDate' placeholder="Start date" type="text" value="2019-12-01" style="width:50px">
								  </div>
								</div>
							  </div>
							  <div class="col">
								<div class="form-group focused">
								  <div class="input-group">
									<div class="input-group-prepend">
									  <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
									</div>
									<input class="form-control" name='pkgEndDate' id='pkgEndDate' placeholder="End date" type="text" value="2019-12-31">
								  </div>
								</div>
							  </div>
							</div>
						  </div>

							<div class="form-group mb-3">
									<small class="d-block text-uppercase font-weight-bold mb-3">Package Price</small>
								   <input class="form-control" type='text' placeholder="pkgPrice" name="pkgPrice" id="pkgPrice">

							 </div>
							 <div class="form-group mb-3">
									<small class="d-block text-uppercase font-weight-bold mb-3">Agency Commission </small>
								   <input class="form-control" type='text' placeholder="pkgCommission" name="pkgCommission" id="pkgCommission">

							 </div>
							  <div class="form-group mb-3">
									<small class="d-block text-uppercase font-weight-bold mb-3">Image Name</small>
								   <input class="form-control" type='text' placeholder="Image" name="Image" id="Image">

							 </div>

							  <div class="form-group mb-3">
								<button type="submit" class="btn btn-sm btn-primary my-4" value="submit" onclick="return confirm('did you really want to do this?')">Update</button>

								<button type="submit" class="btn btn-sm btn-success my-4" value="insert" formaction="insertPkg-2.php" onclick="return confirm('did you really want to do this?')" >Insert</button>
								<button type="submit" class="btn btn-sm btn-danger my-4" value="delete" formaction="updatePkg-3.php" onclick="return confirm('did you really want to do this?')">Delete</button>
								<button type="reset" class="btn btn-sm btn-neutral my-4" value="reset" onclick="return confirm('did you really want to do this?')">Reset</button>

							  </div>

						</form>



				  </div>
				 </div>
				</div>

			</div>
		  </div>
		</div>
	  </div>
	</section>

</main>
<?php
  include 'footer.php';
 ?>
