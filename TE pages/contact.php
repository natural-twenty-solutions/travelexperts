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
    <div class="container pt-lg-md">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card bg-gradient-secondary shadow">
            <div class="card-body p-lg-5">
              <br>
              <h1 class='display-3  text-center'><b>Welcome to Travel Experts</b></h1>
              <p class=' text-center'><br>Give us a call or send us an email and we will get back to you ASAP!</p>
              <br>
              <h3><b>Agents</b></h3><br>
              <div class="row">
                <div class="col-lg-6">
                  <p>Grayson Hacker</p>

                    <p>&nbsp;&nbsp;&nbsp;Phone: (403) 111-1235 <br>
                    &nbsp;&nbsp;&nbsp;Email: Grayson.H@travelexperts.ca</p>

                </div>
                <div class="col-lg-6">
                  <p>Ralphie Backman</p>

                    <p>&nbsp;&nbsp;&nbsp;Phone: (403) 111-1235 <br>
                    &nbsp;&nbsp;&nbsp;Email: Ralphie.B@travelexperts.ca</p>

                </div>
              </div><br>
<hr>
              <h4><b>Contact</b></h4><br>
              <div class="row">
                  <div class="col-lg-6">
                    <p>Phone: (403) 111-1234<br>
                     Fax: (403) 265-1443<br>

                    Email: info@travelexperts.ca</p><br>
                </div>
                  <div class="col-lg-6">
                    <p> Address:<br>
                    &nbsp;240 - 777 8th Ave SW Calgary, AB T2P 3R5 Canada</p>
                </div>
              </div>
                <div class="row justify-content-center">
                <div class="col-lg-8">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.3763609393277!2d-114.06966298424693!3d51.04613807956205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716ffd03cdd5fb%3A0x2b7c8d4101c53b54!2s240+8+Ave+SW%2C+Calgary%2C+AB+T2P+1B5!5e0!3m2!1sen!2sca!4v1550610937326"
                    width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <hr>
              <div class="form-group mt-5">
                <div class="form-group mb-4">
                  <h5>Your message is very important to us !</h5>
                </div>
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
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
                <textarea class="form-control form-control-alternative" name="name" rows="6" cols="80" placeholder="Type a message..."></textarea>
              </div>
              <div>
                <button type="button" class="btn btn-default btn-round btn-block btn-lg">Send Message</button>
              </div>
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
