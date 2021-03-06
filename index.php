<?php include('randomGen.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!--====== Title ======-->
    <title>WXYZR Duck Hunt Challenge</title>

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/png"
    />
    
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="/wxyzr/assets/css/bootstrap.min.css" />

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="/wxyzr/assets/css/LineIcons.css" />

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="/wxyzr/assets/css/magnific-popup.css" />

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="/wxyzr/assets/css/slick.css" />

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="/wxyzr/assets/css/animate.css" />

    <!--====== Default css ======-->
    <link rel="stylesheet" href="/wxyzr/assets/css/default.css" />

    <!--====== Style css ======-->
    <link rel="stylesheet" href="/wxyzr/assets/css/style.css" />

    <!--====== Custom css ======-->
    <link rel="stylesheet" href="/wxyzr/assets/css/style.css" />

    <!--====== Void Space css ======-->
    <link rel="stylesheet" href="/wxyzr/assets/css/custom.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>

  <body>
    <!--====== PRELOADER PART START

    <div class="preloader">
      <div class="loader">
        <div class="ytp-spinner">
          <div class="ytp-spinner-container">
            <div class="ytp-spinner-rotator">
              <div class="ytp-spinner-left">
                <div class="ytp-spinner-circle"></div>
              </div>
              <div class="ytp-spinner-right">
                <div class="ytp-spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR PART ENDS ======-->
    <!--==== duck picture====-->
    <!-- <section class="duck-image"> 
      <div class="container">
          <div class="duck-text">
            <h1>WXYZR DUCK HUNT</h1>
            <h1> CHALLENGE!</h1>
          </div> 
    </div>
    </section> -->
    <section>
      <div class="container duck-pad">
    <div id="duck-image" class="duck-content">
        <img class="mx-auto d-block"  src="/wxyzr/assets/images/duck-hunt-wxyzr.png">
          <div class="duck-hunt-text">
            <h1>WXYZR DUCK HUNT</h1>
            <h1> CHALLENGE!</h1>
          </div> 
    </div>
    </div>
    </section>
    <!--====== CONTACT TWO PART START ======-->
      
    <section id="contact" class="contact-area duck-green">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div
              class="contact-two mt-50 wow fadeIn"
              data-wow-duration="1.5s"
              data-wow-delay="0.2s"
            >
              <h2 class="contact-title">Send in your chance to win!</h2>
              <p class="text">Submit your info to win our Duck Hunt prize!</p>
              <!-- <ul class="contact-info">
                <li>
                  <i class="lni-money-location"></i> Elizabeth St, Melbourne,
                  Australia
                </li>
                <li><i class="lni-phone-handset"></i> +333 789-321-654</li>
                <li><i class="lni-envelope"></i> hello@ayroui.com</li>
              </ul> -->
            </div>
            <!-- contact two -->
          </div>
          <div class="col-lg-6">
            <div
             
              class="contact-form form-style-one mt-35 wow fadeIn"
              data-wow-duration="1.5s"
              data-wow-delay="0.5s"
            >
              <form autocomplete="on" id="contact-form">
                <div class="hunt-success"></div>
                <div class="form-input mt-15">
                  <label>Name*</label>
                  <div class="input-items default">
                    <input id="duck-name" type="text" placeholder="Name" name="name" />
                    <i class="lni-user"></i>
                  </div>
                </div>
                <!-- form input -->
                <div class="form-input mt-15">
                  <label>Email*</label>
                  <div class="input-items default duck-email">
                    <input id="duck-email" type="email" placeholder="Email" name="email" />
                    <i class="lni-envelope"></i>
                  </div>
                </div>
                <div class="form-input mt-15">
                  <label>Phone Number*</label>
                  <div class="input-items default duck-phone">
                    <input
                    id="duck-phone"
                      type="phone"
                      placeholder="Phone Number"
                      name="phone_number"
                    />
                    <i class="lni-phone-handset"></i>
                  </div>
                </div>
                <div class="form-input mt-15">
                    <label>CashApp / Venmo*</label>
                    <div class="input-items default">
                      <input id="duck-cash" type="text" placeholder="CashApp / Venmo" name="payment" />
                      <i class="lni-money-location"></i>
                    </div>
                  </div>
                <!-- form input -->
                <div class="mt-15">
                  <label>Contest Code</label>
                  <div class="input-items default">
                    <!-- <h2 class="random-number">Hello there!</h2> -->
					<h2><?php echo $contest_code; ?></h2>
                    <!-- <i class="lni-pencil-alt"></i> -->
                  </div>
                </div>
                <div class="mt-15">
                    <p>*All fields required</p>
                </div>
                <!-- form input -->
                <p class="form-message"></p>
                <div class="form-input rounded-buttons mt-20">
                  <!--<input type="submit" name="submit" class="main-btn rounded-three submit-btn">-->
					<input id="submit-btn" type="submit" name="submit_btn"  class="main-btn rounded-three" value="Enter Duck Hunt">
                </div>
                <!-- form input -->
              </form>
            </div>
            <!-- contact form -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>

    <!--====== CONTACT TWO PART ENDS ======-->

    <!--====== SAIDEBAR PART START ======-->

    <div class="sidebar-right">
      <div class="sidebar-close">
        <a class="close" href="#close"><i class="lni-close"></i></a>
      </div>
      <div class="sidebar-content">
        <div class="sidebar-logo text-center">
          <a href="#"><img src="/wxyzr/assets/images/logo-alt.png" alt="Logo" /></a>
        </div>
        <!-- logo -->
        <div class="sidebar-menu">
          <ul>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#">RESOURCES</a></li>
            <li><a href="#">CONTACT</a></li>
          </ul>
        </div>
        <!-- menu -->
        <div
          class="sidebar-social d-flex align-items-center justify-content-center"
        >
          <span>FOLLOW US</span>
          <ul>
            <li>
              <a href="#"><i class="lni-twitter-original"></i></a>
            </li>
            <li>
              <a href="#"><i class="lni-facebook-filled"></i></a>
            </li>
          </ul>
        </div>
        <!-- sidebar social -->
      </div>
      <!-- content -->
    </div>
    <div class="overlay-right"></div>

    <!--====== SAIDEBAR PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area  duck-white">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8">
            <div
              class="about-image text-center wow fadeInUp"
              data-wow-duration="1.5s"
              data-wow-offset="100"
            >
              <img src="/wxyzr/assets/images/duck-prize.png" alt="duck hunt prizes" width="70%" />
            </div>
            <div class="section-title text-center mt-30 pb-40">
              <h4
                class="title wow fadeInUp"
                data-wow-duration="1.5s"
                data-wow-delay="0.6s"
              >
                DUCK HUNT PRIZES</h4>
              <p
                class="text wow fadeInUp"
                data-wow-duration="1.5s"
                data-wow-delay="1s"
              >
                Tap-in and get a chance to win a great prizes!
              </p>
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->

        <div class="row duck-pad">
          <div class="col-lg-6">
            <div
              class="single-about d-sm-flex mt-30 wow fadeInUp"
              data-wow-duration="1.5s"
              data-wow-delay="1.2s"
            >
              <div class="about-icon">
                <img src="/wxyzr/assets/images/segway_minipro_1.webp" alt="segway" />
              </div>
              <div class="about-content media-body">
                <h4 class="about-title">Segway MiniPro</h4>
                <p class="text">
                  Win a Segway Minipro. This innovative transporter can be yours!
                </p>
              </div>
            </div>
            <!-- single about -->
          </div>
          <div class="col-lg-6">
            <div
              class="single-about d-sm-flex mt-30 wow fadeInUp"
              data-wow-duration="1.5s"
              data-wow-delay="1.4s"
            >
              <div class="about-icon">
                <img src="/wxyzr/assets/images/green-dollar-sign.jpg" alt="money" />
              </div>
              <div class="about-content media-body">
                <h4 class="about-title">$100 Cash Money</h4>
                <p class="text">
                  We will send $100 to your Venmo or Cashapp account. Enter now for a chance to get some cash!
                </p>
              </div>
            </div>
            <!-- single about 
          </div>
          <div class="col-lg-6">
            <div
              class="single-about d-sm-flex mt-30 wow fadeInUp"
              data-wow-duration="1.5s"
              data-wow-delay="1.6s"
            >
              <div class="about-icon">
                <img src="/wxyzr/assets/images/icon-3.png" alt="Icon" />
              </div>
              <div class="about-content media-body">
                <h4 class="about-title">Work anywhere</h4>
                <p class="text">
                  Poorly designed presentations are a thing of the past. Create
                  beautiful and high-quality content that is aligned.
                </p>
              </div>
            </div>
            <!-- single about
          </div>
          <div class="col-lg-6">
            <div
              class="single-about d-sm-flex mt-30 wow fadeInUp"
              data-wow-duration="1.5s"
              data-wow-delay="1.8s"
            >
              <div class="about-icon">
                <img src="/wxyzr/assets/images/icon-4.png" alt="Icon" />
              </div>
              <div class="about-content media-body">
                <h4 class="about-title">Updated in real time</h4>
                <p class="text">
                  Poorly designed presentations are a thing of the past. Create
                  beautiful and high-quality content that is aligned.
                </p>
              </div>
            </div>
            <!-- single about -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== FOOTER FOUR PART START ======-->

    <footer id="footer" class="footer-area duck-green">
      <div class="footer-widget">
        <!-- <div class="container">
          <div class="row"> -->
 
              <!-- footer link -->
            <!-- </div>
            <div class="col-lg-3 col-sm-6">
              <div class="footer-link">
                <h6 class="footer-title">Help & Suuport</h6>
                <ul>
                  <li><a href="#">Support Center</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                </ul>
              </div> -->
              <!-- footer link -->
            <!-- </div>
          </div> -->
          <!-- row -->
        <!-- </div> -->
        <!-- container -->
      <!-- </div> -->
      <!-- footer widget -->

      <div class="footer-copyright">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="copyright text-center text-lg-left mt-10">
                <p class="text">
                  Crafted by
                  <a
                    style="color: #000"
                    rel="nofollow"
                    href="https://voidspaceled.com"
                    >Void Space</a
                  >
                </p>
              </div>
              <!--  copyright -->
        
              <!-- footer logo -->
            </div>
            <!-- <div class="col-lg-5">
              <ul class="social text-center text-lg-right mt-10">
                <li>
                  <a href="https://facebook.com/uideckHQ"
                    ><i class="lni-facebook-filled"></i
                  ></a>
                </li>
                <li>
                  <a href="https://twitter.com/uideckHQ"
                    ><i class="lni-twitter-original"></i
                  ></a>
                </li>
                <li>
                  <a href="https://instagram.com/uideckHQ"
                    ><i class="lni-instagram-original"></i
                  ></a>
                </li>
                <li>
                  <a href="#"><i class="lni-linkedin-original"></i></a>
                </li>
              </ul> -->
              <!-- social -->
            <!-- </div> -->
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- footer copyright -->
    </footer>
        <!-- jquery for form -->
    <script type="text/javascript">
      $(document).ready(function(){
        $("#contact-form").on('submit',function(e){
          e.preventDefault();
          
          $.ajax({
            type: "POST",
            url: "signup.php",
            data:new FormData(this),
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,
            
            success:function(response){
              $(".hunt-success").css("display", "block").css("background","rgb(240, 239, 96)");
              
              if(response.status == 1){

                $("#contact-form")[0].reset(); // resets the form
                $(".hunt-success").html('<p>' + response.message + '</p>');
              }else{

                $(".hunt-success").css("display", "block").css("background","red");
                $(".hunt-success").html('<p>' + response.message + '</p>');
              }
              // make softer later
              $(window).scrollTop("#contact-form");
            }
          });

          //File Validation


        });
      });
    </script>
    <!-- <embed src="/wxyzr/assets/images/ring-sound.wav" autostart="true" width="0" height="0" id="sound1"
enablejavascript="false"> -->

    <!--====== FOOTER FOUR PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--====== PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="/wxyzr/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/wxyzr/assets/js/vendor/jquery-1.12.4.min.js"></script>
    




    <!--====== Bootstrap js ======-->
    <script src="/wxyzr/assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="/wxyzr/assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="/wxyzr/assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="/wxyzr/assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="/wxyzr/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="/wxyzr/assets/js/scrolling-nav.js"></script>
    <script src="/wxyzr/assets/js/jquery.easing.min.js"></script>

    <!--====== wow js ======-->
    <script src="/wxyzr/assets/js/wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="/wxyzr/assets/js/main.js"></script>

    <!--====== custom js ======-->
    <!-- <script src="/wxyzr/assets/js/wxyzr.js"></script> -->

    <!-- <script>
      function PlaySound(soundObj) {
        var sound = document.getElementById(soundObj);
        sound.Play();
      }
      </script> -->
  </body>
</html>
