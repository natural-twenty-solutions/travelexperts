<?php
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

<div class="row">
    <div class="col-lg-11"></div>
    <div class="col-lg-1">
    <a href="..\TE pages\shoppingcart.php">CART <span class="badge"><?php echo my_shopping_cart_total_product_count(); ?></span></a>
    </div>
</div>

  <div id="product-grid">
  <div class="txt-heading">Products</div>
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
