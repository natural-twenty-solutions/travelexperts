<?php
  ob_start();
  session_start();
  $userid = '';

if( isset( $_GET['userid'])) {
    $id = $_GET['userid'];
}


    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();
    $title = "Login";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
    echo $buffer;
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
            <div class="nav-wrapper">
              <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-single-02 mr-2"></i>Customer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-headphones mr-2"></i>Agent</a>
                </li>
              </ul>
            </div>
            <div class="card shadow">
              <div class="card-body ">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                    <div class="text-muted text-center mb-3">
                      <small>Sign in with</small>

                    </div>
                    <div class="btn-wrapper text-center">
                      <a href="#" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon">
                          <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </span>
                        <span class="btn-inner--text">Facebook</span>
                      </a>
                      <a href="#" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon">
                          <img src="../assets/img/icons/common/google.svg">

                        </span>
                        <span class="btn-inner--text">Google</span>
                      </a>
                    </div>

                  <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                      <small>Or sign in with credentials</small>
                      <p class="text-danger mb-0">
                        <?php
                        if (isset($_SESSION["message"]))
                        {
                          print($_SESSION["message"]);
                          unset($_SESSION["message"]);
                        }
                      ?>
                    </p>

                    </div>
                    <form role="form" method="get" action="checkloginCustomer.php">
                      <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                          </div>
                          <input class="form-control" type="text" name="userid" placeholder="UserID">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input class="form-control" placeholder="Password" type="password" name="password">
                        </div>
                      </div>
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                        <label class="custom-control-label" for=" customCheckLogin">
                          <span>Remember me</span>
                        </label>
                      </div>
                      <div>
                        <button type="submit" class="btn btn-primary my-4" value="Log In">Customer Sign in</button>
                      </div>
                    </form>
                </div>
                <div class="row mt-3">
                  <div class="col-6">
                    <a href="#" class="text-light">
                      <small>Forgot password?</small>
                    </a>
                  </div>
                  <div class="col-6 text-right">
                    <a href="register.php" class="text-light">
                      <small>Create new account</small>
                    </a>
                  </div>
                </div>
              </div>


            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                Agent sign in form
                <p class="text-danger mb-0">
                  <?php
                    if (isset($_SESSION["message"]))
                    {
                      print($_SESSION["message"]);
                      unset($_SESSION["message"]);
                    }
                  ?>
                </p>
              </div>
              <form role="form" method="get" action="checkloginAgent.php">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" type="text" name="userid" placeholder="UserID" value="<?php echo $userid;?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span>Remember me</span>
                  </label>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary my-4" value="Log In">Sign in</button>
                  </div>
                  </form>
                  </div>
              <div class="row mt-3">
                <div class="col-6">
                  <a href="#" class="text-light">
                    <small>Forgot password?</small>
                  </a>
                </div>
                <div class="col-6 text-right">
                  <a href="register.php" class="text-light">
                    <small>Create new account</small>
                  </a>
                </div>
              </div>
            </div>
            </br></br></br></br>
          </div>
        </div>
      </div>
    </section>
    <!--
  <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
              <div class="card-body px-lg-5 py-lg-5">
                <div class="display-4 text-center mb-4">
                  Agent sign in form
                  <h6 style="color:red;">
                    <?php
                      if (isset($_SESSION["message"]))
                      {
                        print($_SESSION["message"]);
                        unset($_SESSION["message"]);
                      }
                    ?>
                  </h6>

                </div>
                <form role="form" method="get" action = "checkloginAgent.php">
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" type="text" name="userid" placeholder="UserID">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Password" type="password" name="password">
                    </div>
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for=" customCheckLogin">
                      <span>Remember me</span>
                    </label>
                  </div>

                  <div >
                    <button type="submit" class="btn btn-primary my-4" value="Log In">Sign in</button>
                  </div>
                </div>
                </form>

            <div class="row mt-3">
              <div class="col-6">
                <a href="#" class="text-light">
                  <small>Forgot password?</small>
                </a>
              </div>
              <div class="col-6 text-right">
                <a href="register.php" class="text-light">
                  <small>Create new account</small>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
-->
</main>
<?php
  include 'footer.php';
 ?>
