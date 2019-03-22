<?php
  ob_start();
  session_start();

    include("header.php");
    $buffer=ob_get_contents();

    include("checkheader.php");
    $buffer=ob_get_contents();
    ob_end_clean();
    $title = "Register";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
    echo $buffer;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
                  <div class="text-muted text-center mb-3">
                    <small>Sign up with</small>
                  </div>
                  <div class="text-center">
                    <a href="#" class="btn btn-neutral btn-icon mr-4">
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
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                  <div class="text-center text-muted mb-4">
                    <small>Or sign up with credentials</small>
                  </div>
                  <form  action="server.php" method="post" >
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                        </div>
                        <input class="form-control" placeholder="customerId"  name="1">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email"  name="2">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password"  name="3">
                      </div>
                    </div>
                    <div class="text-muted font-italic">
                      <small>password strength:
                        <span class="text-success font-weight-700">strong</span>
                      </small>
                    </div>
                    <div class="row my-4">
                      <div class="col-12">
                        <div class="custom-control custom-control-alternative custom-checkbox">
                          <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                          <label class="custom-control-label" for="customCheckRegister">
                            <span>I agree with the
                              <a href="#">Privacy Policy</a>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary mt-4" name="submit" id ='submit'>Create account</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
<?php include 'footer.php';?>
