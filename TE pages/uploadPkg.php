<?php
  ob_start();
  session_start();


    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();
    $title = "uploadPkg";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
    echo $buffer;
	
  
	if(! $_SESSION["loggedin"])
	{
		$_SESSION["message"]="You must login first!";
		$_SESSION["returnpage"]="updatePkg.php";
		header("Location: login.php");
	}
	

	
	include 'header.php';
	include "variables.php";
	include "functions.php";

	$mysqli = connectDB($host, $user, $pwd, $db);

	
?>

 ?>
<main>
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 bg-gradient-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>


    <section class="section section-components">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <!-- Tabs with icons -->
            
            <div class="card shadow">
              <div class="card-body ">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                   
				   <script>
						var req;
						var package;
						function getPackage(pkgId)
						{
							
							req = new XMLHttpRequest();
							var url = "/getpackage.php?pkgId=" + pkgId;
							req.open("get", url);
							req.onreadystatechange=handleResponse;
							req.send(null);
						}
						
						var handleResponse = function(){
							console.log("handleResponse");
							if (req.readyState == 4)
							{
								console.log("handleResponse: " + req.responseText);
								agent = JSON.parse(req.responseText);
								document.getElementById("pkgId").value = package.pkgId;
								document.getElementById("pkgName").value = package.pkgName;
								document.getElementById("pkgDesc").value = package.pkgDesc;
								document.getElementById("pkgStartDate").value = package.pkgStartDate;
								document.getElementById("pkgEndDate").value = package.pkgEndDate;
								document.getElementById("pkgPrice").value = package.pkgPrice;
								document.getElementById("pkgCommission").value = package.pkgCommission;
								
							}
						}
					</script>
                    
                  <div class="card-body px-lg-5 py-lg-5">
				  
					   <form role="form" method="get" action = "updatePkg-2.php">
							<input type="hidden" name="pkgId" id="pkgId" />
							<div class="form-group mb-3"> 
								<h5>Select a package to update:</h5>
								<?php print(selectPkg($mysqli));?>
							</div> 
							<div class="form-group mb-3"> 
								<div class="input-group input-group-alternative">
								 
									<input class="form-control" type="text" name="pkgName" placeholder="pkgName">
								</div>
							</div> 
							<div class="form-group mb-3"> 
								<div class="input-group input-group-alternative"> 
								   <input class="form-control" placeholder="pkgDesc" type="pkgDesc" name="pkgDesc">
								</div>
							 </div>
							 <div class="col-md-auto mt-1 mt-md-1">
								<small class="d-block text-uppercase font-weight-bold mb-3">Date range</small>
									<div class="input-daterange datepicker row align-items-left">
									<div class="col">
									<div class="form-group focused">
									<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
									</div>
									<input class="form-control" placeholder="Start date" type="text" value="06/18/2018" style="width:50px">
								  </div>
								</div>
							  </div>
							  <div class="col">
								<div class="form-group focused">
								  <div class="input-group">
									<div class="input-group-prepend">
									  <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
									</div>
									<input class="form-control" placeholder="End date" type="text" value="06/22/2018">
								  </div>
								</div>
							  </div>
							</div>
						  </div>
								
							<div class="form-group mb-3"> 
								<div class="input-group input-group-alternative"> 
								   <input class="form-control" placeholder="pkgPrice" type="pkgPrice" name="pkgPrice">
								</div>
							 </div>	
							 <div class="form-group mb-3"> 
								<div class="input-group input-group-alternative"> 
								   <input class="form-control" placeholder="pkgCommission" type="pkgCommission" name="pkgCommission">
								</div>
							 </div>	
								
							  <div >
								<button type="submit" class="btn btn-primary my-4" value="Log In">Submit</button>
							  </div>
							</form>
									
                    
                    <form method="get" action="updatePkg-2.php">
						<div class="col-lg-4 col-sm-6">
							<div class="form-group">
								<input type="text" placeholder="Regular" class="form-control" name="pkgName" id="pkgName" value="" >
							</div>
							<div class="form-group">
								<input type="text" placeholder="Regular" class="form-control" name="pkgDesc" id="pkgDesc"  >
							</div>
							<div class="col-md-8 mt-4 mt-md-0">
								<small class="d-block text-uppercase font-weight-bold mb-3">Date range</small>
									<div class="input-daterange datepicker row align-items-center">
									<div class="col">
									<div class="form-group focused">
									<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
									</div>
								<input class="form-control" placeholder="Start date" type="text" value="06/18/2018">
								  </div>
								</div>
							  </div>
							  <div class="col">
								<div class="form-group focused">
								  <div class="input-group">
									<div class="input-group-prepend">
									  <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
									</div>
									<input class="form-control" placeholder="End date" type="text" value="06/22/2018">
								  </div>
								</div>
							  </div>
							</div>
						  </div>
							
							<div class="form-group">
								<input type="text" placeholder="Regular" class="form-control" name="pkgName" id="pkgName" value="" >
							</div>
						<div class="form-group">
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
          </div>
					
					
						<input type="hidden" name="pkgId" id="pkgId" />
					
						<h5>Select a package to update:</h5>
						</td><td><?php print(selectPkg($mysqli));?></td></tr> 
						<tr><td>Package Name:</td><td><input type="text" name="pkgName" id="pkgName" value="" /></td></tr>
						<tr><td>Package Description:</td><td><input type="text" name="pkgDesc" id="pkgDesc" /></td></tr>
						<tr><td>Start:<input type="text" name="pkgStartDate" id="pkgEndDate" /></td><td>End:<input type="text" name="pkgStartDate" id="pkgEndDate" /></td></tr>
						<tr><td>Package Price:</td><td><input type="text" name="pkgPrice" id="pkgPrice" /></td></tr>
						<tr><td><input type="submit" value="Send" /></td><td><input type='reset' /></td></tr>
						</table>
					</form>
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
