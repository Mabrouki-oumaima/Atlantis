<!DOCTYPE html>

<html lang="en">

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
                    <li><a href="about.html">à propos</a></li>
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

    <?php
/* Connexion à une base MySQL avec l'invocation de pilote */

$dsn = 'mysql:dbname=piscine;host=localhost';
$user = 'root';
$password = '';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
$pdo = new PDO($dsn, $user, $password,$options); 
if (isset($_POST['detail'])){

    $_SESSION['id'] = $_POST['id'];
    $req = "select * from piscine_tab where id = '".$_SESSION['id']."'";
    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $piscine = $stmt->fetchAll(PDO::FETCH_ASSOC);


}
?>

                    <?php foreach($piscine as $p) : ?>
                      <div class="fr-view u-align-center u-clearfix u-rich-text u-text u-text-1 u-text-1">
          <p id="isPasted">
            <span class="u-custom-font u-font-merriweather" style="font-weight: 700; font-size: 1.5625rem;"><?= $p['libelle']?></span>
          </p>
        </div>
    <section class="probootstrap-slider flexslider probootstrap-inner">
        <ul class="slides">
            <li style="background-image: url(<?= $p['image'];?>);">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="probootstrap-slider-text text-center">
                            </div>
                        </div>
                </div>
            </li>
        </ul>
    </section>
        <p class="u-align-left u-custom-font u-font-merriweather u-text u-text-2 u-text-2">prix de réservation:<br><?= $p['prix'];?>&nbsp;dt<br>nombre de personnes:<br>&nbsp;<?= $p['nb_personne']; ?> personnes
        </p>
      </div>
    <section class="u-clearfix u-section-2" id="sec-004c">

        <div class="u-container-style u-custom-color-2 u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-text u-text-1"> Description</h3>
            <h4 class="u-text " spellcheck="true"><?= $p['description'];?></h4>
            <h3 class="u-text u-text-1 ">Autres informations<br></h3>
            <ul class="u-text ">
              <h4><li>surface : <?= $p['surface']; ?> m²</li></h4>
              <h4><li>adresse : <?= $p['adresse']; ?></li></h4>
              <h4><li>region : <?= $p['region']; ?></li></h4>
            </ul>

            <div class="u-border-palette-5-dark-2   u-group-3 u-radius-15 u-shape-round u-white u-group-2">
              <div class="u-container-layout ">
                <h3 class="u-custom-font u-font-merriweather u-text u-text-9 u-text-5"> Quand planifiez-vous votre réservation?&nbsp;</h3>
                <div class="u-form u-form-1 u-form-1">
                  <form action="reservation.php" method="POST" class="u-clearfix u-form-spacing-25 u-form-vertical u-inner-form" source="email" name="form" style="padding: 24px;">
                    <div class="u-form-date u-form-group u-form-group-1">
                      <label for="date-c41f" class="u-form-control-hidden u-label"></label>
                      <input type="date" placeholder="MM/DD/YYYY" id="date-c41f" name="date" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-group-2 u-form-radiobutton">
                      <div class="u-form-radio-button-wrapper">
                        <input type="radio" name="radiobutton" value="Barbecue(10D)">
                        <label class="u-label" for="radiobutton">Barbecue(10D)</label>
                        <br>
                        <input type="radio" name="radiobutton" value="Wifi(5D)">
                        <label class="u-label" for="radiobutton">Wifi(5D)</label>
                        <br>
                        <input type="radio" name="radiobutton" value="Jacuzzi/Spa(10D)">
                        <label class="u-label" for="radiobutton">Jacuzzi/Spa(10D)</label>
                        <br>
                      </div>
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                    <button type="submit" class="u-btn u-btn-submit u-button-style" name="detail">Réserver</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
            <div class="u-grey-light-2 u-map u-map-1">
              <div class="embed-responsive">
                <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=Manhattan%2C%20New%20York&amp;z=10&amp;t=m" data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyQyUyME5ldyUyMFlvcmslMjIlMkMlMjJ6b29tJTIyJTNBMTAlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCU3RA=="></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
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