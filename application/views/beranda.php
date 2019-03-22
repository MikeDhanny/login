<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/style.css">
    <script src="main.js"></script>
</head>
<body style="background: black; linear-gradiant(135deg, #325adf 0%, #e7530 100%);">
<header style="background:grey ">
    <div class="atas">
    <div id="logo"><img style="width: 127px/margin-left: 40px;float: left;"
    src="<?= base_url()?>assets/ngkrun.png" alt=""></div>
            <nav>
                <ul>
                    <li> <a href="<?= base_url()?>index.php/Welcome/utama"> Home </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/event"> Event </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/gallery"> Gallery </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/contact"> Contact </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/MyProfil"> MyProfil </a></li>
                </ul>
            </nav>
            </div>
</header>
<h1 align="center" style="color:skyblue;text-align: left;font-size: 10.3mm;margin-top:
97px;margin-left: 12px;font-family: sans-serif;">Selamat Datang <?= $nama_lengkap?>
<br> Berperilakulah seperti <?= $jenis_kelamin?></h1>
<p style="font-size: 18px;margin-left: 56px;margin-top: 39px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, delectus corrupti dolores similique reiciendis laboriosam numquam ullam illo minima sequi aliquid nisi quos voluptatum neque minus autem explicabo, necessitatibus odio?</p>
<img style="width: 823px;margin-left: 518px;margin_top: -312px;)" src="<?= base_url()?>assets/back.png" alt="">
</body>
</html> -->
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<!-- <!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Responsive Sticky Navbar</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <style>
      html, body {
      margin: 0;
      padding: 0;
      width: 100%;
}

body {
      font-family: "Helvetica Neue",sans-serif;
      font-weight: lighter;
}

header {
      width: 100%;
      height: 100vh;
      background: url(https://wallpaper.wiki/wp-content/uploads/2017/05/wallpaper.wiki-Beautiful-Full-HD-Wallpaper-Download-Free-PIC-WPE0010098.jpg) no-repeat 50% 50%;
      background-size: cover;
}

.content {
      width: 94%;
      margin: 4em auto;
      font-size: 20px;
      line-height: 30px;
      text-align: justify;
}

.logo {
      line-height: 60px;
      position: fixed;
      float: left;
      margin: 16px 46px;
      color: #fff;
      font-weight: bold;
      font-size: 20px;
      letter-spacing: 2px;
}

nav {
      position: fixed;
      width: 100%;
      line-height: 60px;
}

nav ul {
      line-height: 60px;
      list-style: none;
      background: rgba(0, 0, 0, 0);
      overflow: hidden;
      color: #fff;
      padding: 0;
      text-align: right;
      margin: 0;
      padding-right: 40px;
      transition: 1s;
}

nav.black ul {
      background: #000;
}

nav ul li {
      display: inline-block;
      padding: 16px 40px;;
}

nav ul li a {
      text-decoration: none;
      color: #fff;
      font-size: 16px;
}

.menu-icon {
      line-height: 60px;
      width: 100%;
      background: #000;
      text-align: right;
      box-sizing: border-box;
      padding: 15px 24px;
      cursor: pointer;
      color: #fff;
      display: none;
}

@media(max-width: 786px) {

      .logo {
            position: fixed;
            top: 0;
            margin-top: 16px;
      }

      nav ul {
            max-height: 0px;
            background: #000;
      }

      nav.black ul {
            background: #000;
      }

      .showing {
            max-height: 34em;
      }

      nav ul li {
            box-sizing: border-box;
            width: 100%;
            padding: 24px;
            text-align: center;
      }

      .menu-icon {
            display: block;
      }

}

      </style>
   </head>
   <body>
      <div class="wrapper">
         <header>
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                  LOGO
               </div>
               <div class="menu">
                  <ul>
                  <li> <a href="<?= base_url()?>index.php/Welcome/utama"> Home </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/event"> Event </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/gallery"> Gallery </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/contact"> Contact </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/MyProfil"> MyProfil </a></li>
                  </ul>
               </div>
            </nav>
         </header>
         <div class="content">
           
         </div>
      </div>
      <script>
       $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
      </script>
   </body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CRAWL</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url('assets') ?>/img/favicon.png" rel="icon">
  <link href="<?= base_url('assets') ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url('assets') ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url('assets') ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url('assets') ?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= --><?= base_url('assets') ?>
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">CRAWL</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="<?= base_url()?>index.php/Welcome/utama">Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?= base_url()?>index.php/Welcome/event">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?= base_url()?>index.php/Welcome/gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?= base_url()?>index.php/Welcome/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?= base_url()?>index.php/Welcome/MyProfil">Profil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/intro-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">CRAWL</h1>
          <p class="intro-subtitle"><span class="text-slider-items">CEO DevFolio,Web Developer,Web Designer,Frontend Developer,Graphic Designer</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Services
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-monitor"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Web Design</h2>
              <p class="s-description text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                provident vitae! Magni
                tempora perferendis eum non provident.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-code-working"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Web Development</h2>
              <p class="s-description text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                provident vitae! Magni
                tempora perferendis eum non provident.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-camera"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Photography</h2>
              <p class="s-description text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                provident vitae! Magni
                tempora perferendis eum non provident.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Responsive Design</h2>
              <p class="s-description text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                provident vitae! Magni
                tempora perferendis eum non provident.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-paintbrush"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Graphic Design</h2>
              <p class="s-description text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                provident vitae! Magni
                tempora perferendis eum non provident.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-stats-bars"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Marketing Services</h2>
              <p class="s-description text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                provident vitae! Magni
                tempora perferendis eum non provident.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->

  <!--/ Section Blog Star /-->
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Blog
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="<?= base_url('assets') ?>/img/post-1.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Aparel</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
              <p class="card-description">
                as
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="<?= base_url('assets') ?>/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author">Mike dhanny</span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> 10 min
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="<?= base_url('assets')?>/img/post-2.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">MengCustom</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html">See more ideas about MengCustom</a></h3>
              <p class="card-description">
               Kami menerima motor untuk di custom 
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="<?= base_url('assets') ?>/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author">mikedhanny</span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> 10 min
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="<?= base_url('assets') ?>img/post-3.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Web Design</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
              <p class="card-description">
                Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                a pellentesque nec,
                egestas non nisi.
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="<?= base_url('assets') ?>/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author">mikedhanny</span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> 10 min
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Message Us
                    </h5>
                  </div>
                  <div>
                      <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                      expedita aperiam aliquid at.
                      Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                      mollitia inventore?
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> BW </li>
                      <li><span class="ion-ios-telephone"></span> 082230689598</li>
                      <li><span class="ion-email"></span> crawl@gmail/li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- <div id="preloader"></div> a -->

  <!-- JavaScript Libraries -->
  <script src="<?= base_url('assets') ?>lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets') ?>lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url('assets') ?>lib/popper/popper.min.js"></script>
  <script src="<?= base_url('assets') ?>lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets') ?>lib/easing/easing.min.js"></script>
  <script src="<?= base_url('assets') ?>lib/counterup/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('assets') ?>lib/counterup/jquery.counterup.js"></script>
  <script src="<?= base_url('assets') ?>lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets') ?>lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?= base_url('assets') ?>lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url('assets')?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url('assets') ?>/js/main.js"></script>

</body>
</html>
