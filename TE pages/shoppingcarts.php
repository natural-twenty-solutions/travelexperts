<?php
ob_start();
session_start();
  include("header.php");
  $buffer=ob_get_contents();
  ob_end_clean();
  $title = "Shopping Cart";
  $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
  echo $buffer;

  require_once("dbcontroller.php");
  $db_handle = new DBController();

  if(!empty($_GET["action"])) {
  switch($_GET["action"]) {

  case "add":
  	if(!empty($_POST["quantity"])) {
  		$productByCode = $db_handle->runQuery("SELECT * FROM packages WHERE PackageId='" . $_GET["code"] . "'");
  		$itemArray = array($productByCode[0]["PackageId"]=>array('name'=>$productByCode[0]["PkgName"],
      'code'=>$productByCode[0]["PackageId"],
      'quantity'=>$_POST["quantity"],
      'price'=>$productByCode[0]["PkgBasePrice"],
      'image'=>$productByCode[0]["image"],
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

?>

<body>
  <div class="position-relative">
    <section class="section section-lg section-shaped pb-25 bg-primary">
      <div class="shape shape-style-2 shape-default">
      </div>
    </section>
  </div>

<div id="shopping-cart">
  <div class="txt-heading">Shopping Cart</div>
  <a id="btnEmpty" href="shoppingcarts.php?action=empty">Empty Cart</a>

  <?php
  if(isset($_SESSION["cart_item"])){
     $total_quantity = 0;
     $total_price = 0;
  ?>

  <table class="tbl-cart" cellpadding="10" cellspacing="1">
    <tbody>
      <tr>
      <th style="text-align:left;">Name</th>
      <th style="text-align:right;" width="15%">Product Code</th>
      <th style="text-align:right;" width="15%">Quantity</th>
      <th style="text-align:right;" width="15%">Unit Price</th>
      <th style="text-align:right;" width="15%">Price</th>
      <th style="text-align:center;" width="5%">Remove</th>
      </tr>

      <?php
      foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
      ?>

      <tr>
      <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
      <td style="text-align:right;"><?php echo $item["code"]; ?></td>
      <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
      <td style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
      <td style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
      <td style="text-align:center;"><a href="shoppingcarts.php?action=remove&code=<?php echo $item["code"]; ?>"class="btnRemoveAction">
        <img src="icon-delete.png" alt="Remove Item" /></a></td>
      </tr>

      <?php
        	$total_quantity += $item["quantity"];
        	$total_price += ($item["price"]*$item["quantity"]);
          //total price session
          $_SESSION['total_price'] = $total_price;

      }
      ?>

      <tr>
      <td colspan="2" align="right">Total:</td>
      <td align="right"><?php echo $total_quantity; ?></td>
      <td align="right" colspan="2" name='total_price'><strong>
      input<?php echo "$ ".number_format($total_price, 2); ?></strong></td>
      <td></td>
      </tr>
    </tbody>
  </table>

  <div class="align-right">
  <a href="payment.php"><button class="btn btn-primary" type="button" name="check_out">Go To Checkout</button></a>

  <?php
  }
  else {
  ?>

  <div class="no-records">Your Cart is Empty</div>

  <?php
  }
  ?>

</div>

<?php
  include 'footer.php';
?>
