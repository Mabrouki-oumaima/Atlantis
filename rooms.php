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

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<?php ob_start(); ?>
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


        <ul class="slides">
            <li style="background-image: url(img/grey.jpg);" class="overlay">

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading probootstrap-animate">Nos piscines</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
<?php
/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:dbname=piscine;host=localhost';
$user = 'root';
$password = '';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
$pdo = new PDO($dsn, $user, $password,$options);


$req = "select * from piscine_tab where id between 1 and 6";
$stmt = $pdo->prepare($req);
$stmt->execute();
$piscine = $stmt->fetchAll(PDO::FETCH_ASSOC);
session_start();



?>

<section class="probootstrap-section">
        <div class="row">
                    <?php foreach($piscine as $p) : ?>
                    <form action="piscine_page.php" method="post">
                        <div class="col-md-4 col-sm-4 col-xs-1">
                    <div class="card m-2 w-50">
                        <img src="<?= $p['image'] ?>" class="img-responsive" alt="iamge" style="width: 10cm; height:5cm">
                        <div class="card-body">
                            <label for="libelle1"><h5 class="card-title" id="libelle" name = "libelle2"><?= $p['libelle']?></h5></label>
                            <p class="card-text"><?=$p['description'];?></p>
                            <button type="submit" class="btn btn-primary" name="detail">plus de détails</button>
                            <input type='hidden' name='id' value='<?=$p['id'];?>'>
                            <h1 class="card-title"></h1>
                    </div>
                </div>
        </div>
                    </form>
                <?php endforeach;?>
</section>
    <section class="probootstrap-section probootstrap-section-dark">

            <div class="row mb30">
                <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
                    <h2>Explore our Services</h2>
                    <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service left-icon probootstrap-animate">
                        <div class="icon">
                            <img src="img/flaticon/svg/001-building.svg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
                        </div>
                        <div class="text">
                            <h3>1+ Million Hotel Rooms</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service left-icon probootstrap-animate">
                        <div class="icon">
                            <img src="img/flaticon/svg/003-restaurant.svg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
                        </div>
                        <div class="text">
                            <h3>Food &amp; Drinks</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service left-icon probootstrap-animate">
                        <div class="icon">
                            <img src="img/flaticon/svg/004-parking.svg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
                        </div>
                        <div class="text">
                            <h3>Airport Taxi</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-half">
        <div class="image" style="background-image: url(img/slider_2.jpg);"></div>
        <div class="text">
            <div class="probootstrap-animate fadeInUp probootstrap-animated">
                <h2 class="mt0">Best 5 Star hotel</h2>
                <p><img src="img/curve_white.svg" class="seperator" alt="Free HTML5 Bootstrap Template"></p>
                <div class="row">
                    <div class="col-md-6">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="col-md-6">
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
            </div>
        </div>
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