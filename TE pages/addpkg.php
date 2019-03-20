include 'header.php';
 //require_once("dbcontroller.php");
 // $db_handle = new DBController();
 // if(!empty($_GET["action"])) {
 // switch($_GET["action"]) {
 // 	case "add":
 // 		//if(!empty($_POST["quantity"])) {
  			//$productByCode = $db_handle->runQuery("SELECT * FROM packages WHERE PackageId='" . $_GET["code"] . "'");
function addShoppingCart(pkgId, pkgName,pkgQty, pkgPrice)
{
  		 ob_start();
		session_start();
		include("header.php");
		
		$itemArray = array($pkgId=>array('name'=>$pkgName,
        'code'=>$pkgId,
        'quantity'=>$_POST["quantity"],
        'price'=>$pkgPrice,
       // 'image'=>$productByCode[0]["image"]));
  			if(!empty($_SESSION["cart_item"])) {
  				if(in_array($pkgId,array_keys($_SESSION["cart_item"]))) {
  					foreach($_SESSION["cart_item"] as $k => $v) {
  							if($row[0] == $k) {
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
}
	
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