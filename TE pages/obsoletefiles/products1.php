<?php
  session_start();
  include 'header.php';
  require_once("dbcontroller.php");
  $db_handle = new DBController();
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
   <?php
   $product_array = $db_handle->runQuery("SELECT * FROM packages ORDER BY id ASC");
   if (!empty($product_array)) {
     foreach($product_array as $key=>$value){
   ?>
     <div class="product-item">
       <form method="post" action="cart1.php?action=add&code=<?php echo $product_array[$key]["PackageId"]; ?>">

       <!-- <div class="product-image"><img src="
       /* <?php echo $product_array[$key]["image"]; ?> */
       "> </div> -->
       
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
</body>


</html>
