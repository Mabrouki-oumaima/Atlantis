<!DOCTYPE html>

<html lang="en">
<?php session_start();?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nos piscines</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/piscine_page.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.0.14, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">
        

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>

 <!-- START: header -->



 <header role="banner" class="probootstrap-header">
        <!-- <div class="container"> -->
        <div class="row">
            <a href="index.html" class="probootstrap-logo visible-xs"><img src="img/logo_sm.png" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>

            <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
            <div class="mobile-menu-overlay"></div>

            <nav role="navigation" class="probootstrap-nav hidden-xs">
                <ul class="probootstrap-main-nav">
                    <li class="hidden-xs probootstrap-logo-center">
                        <a href="index.html"><img src="img/logo_md.png" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a>
                    </li>
                    <li><a href="index.html">Acceuil</a></li>

                    <li class="active"><a href="rooms.php">Nos piscines</a></li>

                    <!--li><a href="reservation.html">Reservation</a></li-->
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="about.html">?? propos</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a class="btn btn-primary" href="inscri.html" role="button">S'inscrire</a></li>
                    <li><a class="btn btn-primary" href="login.html" role="button">Se connecter</a></li>
                </ul>

                <div class="extra-text visible-xs">
                    <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                    <h5>Connect With Us</h5>
                    <ul class="social-buttons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li><a href="#"><i class="icon-instagram2"></i></a></li>

                    </ul>

                </div>
            </nav>

        </div>
        <!-- </div> -->
    </header>
    <form id="booking-form" class="booking-form" method="POST">
        <div class="form-group">
            <div class="form-destination">
                <label for="destination">Region</label>
                <input type="text" id="destination" name="Region" placeholder="E.Hammamet" />
            </div>
            <div class="form-date-from form-icon">
                <label for="date_from">Date</label>
                <input type="date" id="date_from" class="date_from" placeholder="Pick a date" />
                <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
            </div>
            <div class="form-surf">
                <label>Surface</label>
                <input type="text" id="surf_from" class="surf_from" placeholder="100" />
                <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
            </div>

            <div class="form-quantity">
                <label for="quantity">Nombre</label>
                <span class="modify-qty plus" onClick="Tang()"><i class="zmdi zmdi-chevron-up"></i></span>
                <input type="number" name="quantity" id="quantity" value="0" min="0" class="nput-text qty text">
                <span class="modify-qty minus" onClick="Giam()"><i class="zmdi zmdi-chevron-down"></i></span>
            </div>
            <div class="form-submit">
                <input type="submit" id="submit" class="submit" value="rechercher" />
            </div>
        </div>
    </form>
    <!-- END: header -->


  <section class="probootstrap-section">

      <div class="row probootstrap-gutter40">
        <div class="col-md-8">
          <h3 class="mt0">Confirmation de la r??servation</h3>
          <form action="phhp/confirmation.php" method="post" class="probootstrap-form">


                  <p>First Name : <?= $_SESSION['user_nom']?></p>


                  <p>Last Name : <?= $_SESSION['user_prenom']?></p>


                  <p>Email : <?= $_SESSION['email']?></p>


                  <p>Piscine : <?= $_SESSION['libelle']?></p>


                  <p>Prix : <?= $_SESSION['prix']?></p>

                  <p>date : <?= $_POST['date'];
                  $_SESSION['date'] = $_POST['date']?></p>
              <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Reserver">
              <br>
              <br>
              

            </div>
          </form>
        </div>
      </div>
      Si vous viser ?? annuler la resevationet revenir ?? l'acceuil,<a href="index.html"> cliquer ici.</a>
  </section>
    
     <!-- START: footer -->
     <footer role="contentinfo" class="probootstrap-footer">

<div class="row">
    <div class="col-md-4">
        <div class="probootstrap-footer-widget">
            <p class="mt40"><img src="img/logo_sm.png" class="hires" width="120" height="33" alt="Free HTML5 Bootstrap Template by uicookies.com"></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="probootstrap-footer-widget">

            <ul class="probootstrap-blog-list">
                <li>


                </li>
                <li>

                </li>
                <li>

                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class="probootstrap-footer-widget">
            <h3>Contact</h3>
            <ul class="probootstrap-contact-info">
                <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
            </ul>

        </div>
    </div>
</div>
<div class="row mt40">
    <div class="col-md-12 text-center">
        <ul class="probootstrap-footer-social">
            <li><a href=""><i class="icon-twitter"></i></a></li>
            <li><a href=""><i class="icon-facebook"></i></a></li>
            <li><a href=""><i class="icon-instagram2"></i></a></li>
        </ul>
        

    </div>
</div>
</div>
</footer>
<!-- END: footer -->

<script src="js/scripts.min.js"></script>
<script src="js/main.min.js"></script>
<script src="js/custom.js"></script>


</body>

</html>