<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Communities Matter - SANAC Civil Society Forum</title>
    <link rel="stylesheet" href="assets/nicepage.css" media="screen">
    <link rel="stylesheet" href="assets/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="assets/jquery.js" defer="">
    </script>
    <script class="u-script" type="text/javascript" src="assets/nicepage.js" defer="">
    </script>
    <meta name="generator" content="Nicepage 2.25.0, nicepage.com">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "url": "index.php"
    }</script>
    <meta property="og:title" content="Communities Matter Web App">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.php">
    <meta property="og:url" content="index.php">
  </head>
  <body data-home-page="index.php" data-home-page-title="Home" class="u-body">
    <header class="u-clearfix u-header u-image u-header" id="sec-0e3f" data-image-width="2407" data-image-height="586">
    <div class="u-clearfix u-sheet u-sheet-1">
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse">
          <a class="u-button-style u-nav-link" href="index.php">
            <svg>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </symbol>
              </defs>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled">
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link" href="index.php">Home</a>
            </li>
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link" href="about.php">About Communities Matter
              </a>
            </li>
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link" href="survey.php">Survey
              </a>
            </li>
            
              <?php 

              include("connect/connectDB.php"); // connection to db
              error_reporting(0);
              session_start();

              if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
                { 
              ?>

              <li class="u-nav-item">
                <a class="u-button-style u-nav-link">Mobalisers</a>
                <div class="u-nav-popup">
                  <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link" href="register.php">Profile</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link" href="login.php">Logout</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link" href="register.php">Register</a>
                    </li>
                  </ul>
                </div>
              </li>
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link" href="report.php">Progress
              </a>
            </li>

              <?php } else { ?>

              <li class="u-nav-item">
                <a class="u-button-style u-nav-link">Mobilisers</a>
                <div class="u-nav-popup">
                  <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link" href="login.php">Login</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link" href="register.php">Register</a>
                    </li>
                  </ul>
                </div>
              </li>

            <?php } ?>
            
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link" href="contact.php">Contact Us
              </a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link" href="index.php">Home
                  </a>
                </li>
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link" href="about.php">About Us
                  </a>
                </li>
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link" href="survey.php">Survey
                </a>
              </li>

              <?php

              include("connect/connectDB.php"); // connection to db
              error_reporting(0);
              session_start();

              if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                {
              ?>

              <li class="u-nav-item">
                <a class="u-button-style u-nav-link">Mobalisers</a>
                <div class="u-nav-popup">
                  <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link" href="register.php">Register</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link" href="report.php">Progress
                </a>
              </li>

              <?php } else { ?>

              <li class="u-nav-item">
                <a class="u-button-style u-nav-link">Mobilisers</a>
                <div class="u-nav-popup">
                  <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link" href="login.php">Login</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link" href="register.php">Register</a>
                    </li>
                  </ul>
                </div>
              </li>

              <?php } ?>

              <li class="u-nav-item">
                <a class="u-button-style u-nav-link" href="contact.php">Contact Us
                </a>
              </li>
            </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      </div>
    </header>
    <section class="u-clearfix u-section-1" id="sec-f821">
      <div class="u-clearfix u-sheet u-valign-top-lg u-valign-top-md u-valign-top-sm u-sheet-1">
        <img src="images/SANACCSFlogotypePNGimage300dpiRGB.png" alt="" class="u-image u-image-default u-image-1" data-image-width="852" data-image-height="881">
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-a99a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img src="images/Screenshot2020-09-30at23.14.17.png" alt="" class="u-image u-image-default u-image-1" data-image-width="1746" data-image-height="568">
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-9b9b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img src="images/diversegroupofcharacters.png" alt="" class="u-image u-image-default u-image-1" data-image-width="2172" data-image-height="718">
      </div>
    </section>
    
    <footer class="u-align-center u-clearfix u-footer u-valign-bottom u-white u-footer" id="sec-96c0"><img class="u-expand-resize u-expanded-width u-image u-image-1" src="images/Footerredbandv1.png" data-image-width="2998" data-image-height="262">
    </footer>
  </body>
</html>