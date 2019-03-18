<?php
  session_start();
  include 'header.php';
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
    </section>
  </main>
<?php
  include 'footer.php';
 ?>
