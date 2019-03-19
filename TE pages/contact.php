<?php
  ob_start();
  session_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();
    $title = "Contact Us";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
    echo $buffer;
 ?>
 <body>
   <div class="position-relative">
     <section class="section section-lg section-shaped pb-25 bg-primary">
       <div class="shape shape-style-2 shape-default">
       </div>
     </section>
   </div>
        <section class="section section-lg pt-lg-0 section-contact-us">
          <div class="container pt-md-md">
            <div class="row justify-content-center mt-100">
              <div class="col-lg-8">
                <div class="card bg-gradient-secondary shadow">
                  <div class="card-body p-md-5">
                    <h4 class="mb-1">Contact Travel Experts</h4>
                    <p class="mt-0">Your message is very important to us.</p>
                    <div class="form-group mt-5">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                        </div>
                        <input class="form-control" placeholder="Your name" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email address" type="email">
                      </div>
                    </div>
                    <div class="form-group mb-4">
                      <textarea class="form-control form-control-alternative" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
                    </div>
                    <div>
                      <button type="button" class="btn btn-default btn-round btn-block btn-lg">Send Message</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </br></br></br></br></br></br></br></br></br>
        </section>
  </main>

<?php
  include 'footer.php';
?>
