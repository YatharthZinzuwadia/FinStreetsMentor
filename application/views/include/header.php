<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>FinStreets</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="ClassWork Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
      SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
  <script>
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--//meta tags ends here-->
  <!--booststrap-->
  <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="<?= base_url(); ?>assets/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
  <!-- //font-awesome icons -->
  <link href="<?= base_url(); ?>assets/css/blast.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style10.css" />
  <!--stylesheets-->
  <link href="<?= base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
</head>

<body>
  <div class="blast-box">
    <div class="blast-icon"><span class="fas fa-tint"></span></div>
    <div class="blast-frame">
      <p>change colors</p>
      <div class="blast-colors">
        <div class="blast-color">#86bc42</div>
        <div class="blast-color">#8373ce</div>
        <div class="blast-color">#14d4f4</div>
        <div class="blast-color">#72284b</div>
      </div>
      <p class="blast-custom-colors">Custom colors</p>
      <input type="color" name="blastCustomColor" value="#cf2626">
    </div>
  </div>


  <div class="header-outs" id="header">
    <div class="header-w3layouts">
      <div class="container">
        <div class="row headder-contact">
          <div class="col-lg-6 col-md-7 col-sm-9 info-contact-agile">
            <ul>
              <li>
                <span class="fas fa-phone-volume"></span>
                <p>+91 91733-25960</p>
              </li>
              <li>
                <span class="fas fa-envelope"></span>
                <p><a href="mailto:innovative@gmail.com">yatharthzinzuwadia@gmail.com</a></p>
              </li>
              <li>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-5 col-sm-3 icons px-0">
            <ul>
              <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
              <li><a href="#"><span class="fas fa-envelope"></span></a></li>
              <li><a href="#"><span class="fas fa-rss"></span></a></li>
              <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="hedder-up">
          <h1><a href="http://localhost/innovative_solution/" class="navbar-brand" data-blast="color">FinStreets</a></h1>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="headdser-nav-color" data-blast="bgColor">
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/innovative_solution/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a href="#about" class="nav-link scroll">About</a>
              </li>
              <li class="nav-item">
                <a href="#blog" class="nav-link scroll">courses</a>
              </li>
              <li class="nav-item">
                <a href="#service" class="nav-link scroll">Servicies</a>
              </li>
              <li class="nav-item">
                <a href="#stats" class="nav-link scroll">Stats</a>
              </li>
              <li class="nav-item">
                <a href="#contact" class="nav-link scroll">Contact</a>
              </li>
              <?php if (!isset($this->session->userdata['user_id'])) : ?>
                <li class="nav-item">
                  <a href="#register" class="nav-link scroll" data-toggle="modal" data-target="#register">Register</a>
                </li>
                <li class="nav-item">
                  <a href="#login" class="nav-link scroll" data-toggle="modal" data-target="#login">Login</a>
                </li>
              <?php endif; ?>
              <?php if (isset($this->session->userdata['user_id'])) : ?>

                <li class="nav-item">
                  <a href="<?= base_url() ?>cart/" class="nav-link ">Cart</a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url() ?>cart/orders" class="nav-link ">My Orders</a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url() ?>home/logout" class="nav-link ">Logout</a>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>


    </div>


  </div>