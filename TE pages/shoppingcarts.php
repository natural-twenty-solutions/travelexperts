<?php
  //ob_start output buffering is active, no output is sent from the script
  //start session
  ob_start();
  session_start();
  include "checkheader.php";
  //This is code to replace the header title in the header.php file to variable $title
  $buffer=ob_get_contents();
  ob_end_clean();
  $title = "Shopping Cart";
  $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
  echo $buffer;
  //This script connects to functions.php which connects to database with DBController class
  require_once("functions1.php");
  $db_handle = new DBController();
  //The following code is if statements that adds, removes, or empty the shopping cart
  if(!empty($_GET["action"])) {
  switch($_GET["action"]) {
  //Add case
  case "add":
  	if(!empty($_POST["quantity"])) {
  		$productByCode = $db_handle->runQuery("SELECT * FROM packages WHERE PackageId='" . $_GET["code"] . "'");
  		$itemArray = array($productByCode[0]["PackageId"]=>array('name'=>$productByCode[0]["PkgName"],
      'code'=>$productByCode[0]["PackageId"],
      'quantity'=>$_POST["quantity"],
      'price'=>$productByCode[0]["PkgBasePrice"],
      'image'=>$productByCode[0]["img"],
      'depart'=>$productByCode[0]["PkgStartDate"],
      'return'=>$productByCode[0]["PkgEndDate"],
      'desc'=>$productByCode[0]["PkgDesc"],));

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
  //Remove item case
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
  //Empty bin case
	case "empty":
		unset($_SESSION["cart_item"]);
	break;
}
}
?>

<main>
  <section class="section section-lg section-hero section-shaped">
    <!-- Circles background -->
    <div class="shape shape-style-1 shape-primary alpha-4">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="row justify-content-center ">
      <h3 class='display-2' style="color:white">
        <?php
        if(isset($_SESSION["cart_item"])){
           $total_quantity = 0;
           $total_price = 0;
        ?>

      </h3>
    </div>

  <!-- This is the container which will populate any items added from any vacation package to the shopping cart -->
  <div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="card bg-gradient-secondary shadow">
        <div class="card-body p-lg-5">

          <div class="card-header border-0">
            <h3 class="mb-0">Shopping Cart</h3>
            <a class="btn btn-outline-danger" id="btnEmpty" href="shoppingcarts.php?action=empty">Empty Cart</a>
          </div>
          <!-- The following code generates a table for any added items  -->
          <?php
          if(isset($_SESSION["cart_item"])){
             $total_quantity = 0;
             $total_price = 0;}
          ?>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" >Name</th>
                  <th scope="col">Product Code</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Unit Price</th>
                  <th scope="col">Price</th>
                  <th scope="col">Remove</th>
                </tr>
              </thead>

      <!-- The following code will fill the table with items added from package/individual package pages  -->
      <?php
      foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
      ?>
      <tr>
      <td>
        <!-- <img src="<?php echo $item["img"]; ?>" class="cart-item-image" /> -->
        <?php echo $item["name"]; ?>
      </td>
      <td scope="col"><?php echo $item["code"]; ?></td>
      <td scope="col"><?php echo $item["quantity"]; ?></td>
      <td scope="col"><?php echo "$ ".$item["price"]; ?></td>
      <td scope="col"><?php echo "$ ". number_format($item_price,2); ?></td>
      <td scope="col"><a href="shoppingcarts.php?action=remove&code=<?php echo $item["code"];?>"class="btnRemoveAction">
        <img src="icon-delete.png" alt="Remove Item" /></a></td>
      </tr>
      <!-- The following code will display the total price for cart -->
      <?php
        	$total_quantity += $item["quantity"];
        	$total_price += ($item["price"]*$item["quantity"]);
          //total price session
          $_SESSION['total_price'] = $total_price;
          $_SESSION['total_quantity'] = $total_quantity;

      }
      ?>

      <tr>
        <td></td>

      <td scope="col">Total:</td>
      <td scope="col"><?php echo $total_quantity; ?></td>
      <td></td>
      <td scope="col" name='total_price'><strong>
      <?php echo "$ ".number_format($total_price, 2); ?></strong></td>
      <td></td>
      </tr>

    </tbody>
  </table>
</div>

<!-- This is the checkout button. It will take session data and move it to payment page -->
<div class="card-footer py-4">
<a href="payment.php"><button class="btn btn-primary" type="button" style="float: right;" name="check_out">Go To Checkout</button></a>

<?php
}

// If there is no items in cart, the message below will display
else {
?>
<div class="display-1">Your Cart is Empty</div>
<?php
}
?>

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
