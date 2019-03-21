<?php
  session_start();
  include 'header.php';
 ?>
  <main class="profile-page">

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

          <div class="container pt-lg-md">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="card bg-gradient-secondary shadow">
                  <div class="card-body p-lg-5">
                    <h4 class="display-4">Travel Experts Order Summary</h4><br>
                    <div class="table-responsive">
                    <table  class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Price</th>
                        </tr>

                        <?php
                        foreach ($_SESSION["cart_item"] as $item){
                          $item_price = $item["quantity"]*$item["price"];
                          echo '<tr>
                          <td scope="col">'. $item["name"]. '</td>';
                          echo '
                          <td scope="col">'. $item["quantity"]. '</td>';
                          echo '
                          <td scope="col">'. $item["price"]. '</td>';
                          echo '
                          <td scope="col">'. number_format($item_price,2). '</td>';
                        }
                        ?>



                        <tr>
                          <td></td>
                          <td></td>
                        <td scope="col"><b>Total: </b></td>

                        <td scope="col" ><b>$
                        <?php    print $_SESSION['total_price'];?></b></td>

                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <hr>

<!-- YOUR ORDER
                    <div class="row">
                      <div class="col"></div>
                    </div>
                    <div>
                      <button type="button" class="btn btn-default btn-round btn-block btn-lg">Proceed to check out</button>
                    </div><br>-->

<!-- row1 -->
<h4 class="display-4">Payment Method</h4><br><br>
                    <div class="row">
                      <div class="col">
                        <label for="cname">Full Name</label>
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                          </div>
                          <input class="form-control" placeholder="Full Name" type="text">
                        </div>
                      </div>

                      <div class="col">
                        <label for="cname">Accepted cards</label>
                        <div class="">
                          <div class="">

                            <i class="fa fa-cc-mastercard" style="font-size:48px;color:blue"></i>
                            <i class="fa fa-cc-paypal" style="font-size:48px;color:orange"></i>
                            <i class="fa fa-cc-amex" style="font-size:48px;color:green"></i>
                            <i class="fa fa-cc-visa" style="font-size:48px;color:red"></i>
                          </div>
                        </div>
                      </div>
                    </div><br>
<!-- row2 -->
                    <div class="row">
                      <div class="col">
                        <label for="cname">Email</label>
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                          </div>
                          <input class="form-control" placeholder="Email" type="email">
                        </div>
                      </div>

                      <div class="col">
                        <label for="cname">Name on Card</label>
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                          </div>
                          <input class="form-control" placeholder="Your name" type="text">
                        </div>
                      </div>
                    </div><br>
<!-- row3 -->
                    <div class="row">
                      <div class="col">
                        <label for="cname">Address</label>
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                          </div>
                          <input class="form-control" placeholder="Address" type="text">
                        </div>
                      </div>

                      <div class="col">
                        <label for="cname">Credit card number</label>
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-credit-card-alt"></i></span>
                          </div>
                          <input class="form-control" placeholder="1111-2222-3333-4444" type="text">
                        </div>
                      </div>
                    </div><br>

<!-- row4 -->
                    <div class="row">
                      <div class="col">
                        <label for="cname">City</label>
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-university"></i></span>
                          </div>
                          <input class="form-control" placeholder="City" type="text">
                        </div><br>
<!-- row5_01_02 -->
                        <div class="row">
                          <div class="col">
                            <label for="cname">State</label>
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class=""></i></span>
                              </div>
                              <input class="form-control" placeholder="State" type="text">
                            </div>
                          </div>

                          <div class="col">
                            <label for="cname">Zip</label>
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class=""></i></span>
                              </div>
                              <input class="form-control" placeholder="T1T 1T1" type="text">
                            </div>
                          </div>
                        </div><br>
                      </div>

                      <div class="col">
                        <label for="cname">CVV</label>
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class=""></i></span>
                          </div>
                          <input class="form-control" id="cvv" placeholder="123" type="text">
                        </div><br>
<!-- row5_03_04 -->
                        <div class="row">
                          <div class="col">
                            <label for="cname">Exp Year</label>
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"></i></span>
                              </div>
                              <input class="form-control" id="expyear" placeholder="2019" type="text">
                            </div>
                          </div>

                          <div class="col">
                            <label for="cname">Exp Month</label>
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class=""></i></span>
                              </div>
                              <input class="form-control" placeholder="01" type="text" >
                            </div>
                          </div>
                        </div><br>
                      </div>
                    </div><br>
                    <div>
                      <button type="button" class="btn btn-default btn-round btn-block btn-lg">Continue to checkout</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  </main>
  <?php include 'footer.php' ?>
  <!-- Core -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/popper/popper.min.js"></script>
  <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="../assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.0.1"></script>
</body>

</html>
