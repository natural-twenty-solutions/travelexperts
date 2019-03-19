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
  <main class="profile-page">
    <section class="section-profile-cover section-shaped my-0">
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
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2800 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2800 100 0 100"></polygon>
        </svg>
      </div>
    </section>
        <section class="section section-lg pt-lg-1 section-contact-us">
          <div class="container pt-lg-md">
            <div class="row justify-content-center mt--300">
              <div class="col-lg-8">
                <div class="card bg-gradient-secondary shadow">
                  <div class="card-body p-lg-5">
                    <form action="bouncer.php" method="get" >
                        <br>
                        <style>
                        h1 {text-align:center; }
                        h1{font-size: 26px;}
                        h2 {text-align:center; }
                        h2{font-size: 16px;}
                        </style>
                        <h1><b>Welcome to Travel Experts</b></h1>
                        <h2><br>Give us a call or send us an email and we will get back to you ASAP!</h2>
                        <br>
                        <h3><b>Agents</b></h3><br>
                        <div class="row">
                          <div class="col">
                            <p>Grayson Hacker</p>
                            <ul>
                              <li>Phone:(403) 111-1235 </li>
                              <li>Email:Grayson.H@travelexperts.ca</li>
                            </ul>
                          </div>
                          <div class="col">
                          <p>Ralphie Backman</p>
                          <ul>
                            <li>Phone:(403) 111-1235 </li>
                            <li>Email:Ralphie.B@travelexperts.ca</li>
                          </ul>
                        </div>
                      </div><br>

                      <h4><b>Contact</b></h4>
                        <div class="row">
                        <div class="col">

                        <ul style="">
                        <li>Phone:   (403) 111-1234</li><br>
                        <li> Fax:(403) 265-1443</li><br>
                      </ul>
                    </div>
                        <div class="col">
                          <ul style="">
                        <li>Email:</li><br>
                        <p>info@travelexperts.ca</p>
                      </ul>
                    </div>
                </div>
                        <div class="row">
                        <div class="col">
                        <ul style="">
                        <li>   Address:</li>
                        <p>&nbsp;240 - 777  8th  Ave  SW   Calgary.         Alberta.    T2P 3R5.     Canada</p>
                        </ul>
                        </div>

                        <div class="col">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.3763609393277!2d-114.06966298424693!3d51.04613807956205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716ffd03cdd5fb%3A0x2b7c8d4101c53b54!2s240+8+Ave+SW%2C+Calgary%2C+AB+T2P+1B5!5e0!3m2!1sen!2sca!4v1550610937326"  width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                      </div>
                    </div><br><br>

                      <div class="form-group mt-5">
                        <div class="form-group mb-4">
                          <style>
                          h4 {text-align:center; }
                          h4{font-size: 18px;}
                          </style>
                          <h4>Your message is very important to us !</h4>
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
                  </form>
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
