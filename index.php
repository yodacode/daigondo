<?php include 'data.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dai gondo</title>
    <link rel="stylesheet" type="text/css" href="js/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style>
      body {
        font-family: Futura, 'Trebuchet MS', Arial, sans-serif;
      }
    </style>
</head>
<body>    
    <div class="site">

        <header class="header">
            <div class="container-fluid">
                <a href="#" class="header__logo" data-logo>
                    <?php include('logo.php') ?>
                </a>
                <nav class="nav">
                    <div class="nav__left">
                        <a href="#" class="green" data-link-profil>Profile</a>
                        <a href="#" class="yellow" data-link-portfolio>Portfolio</a>
                        <a href="#" class="red hidden-sm hidden-lg hidden-md" data-link-contact>Contact</a>
                    </div>
                    <div class="nav__right hidden-xs">
                        <a href="#" class="red" data-link-contact>Contact</a>
                    </div>
                </nav>
            </div>
        </header>

        <aside class="sidebar">
            <div class="vertical">
                Follow me <a href="#">Instagram</a> / <a href="#">Pinterest</a>
            </div>
        </aside>

        <section class="container-fluid site-content">
            <div data-page data-page-portfolio class="animated fadeIn">
                <section class="introduction">
                    <h1 class="introduction__title">Morceaux choisis</h1>
                    <div class="separator"></div>
                    <div class="introduction__description">Portfolio</div>
                </section>

                <div id="isotope" class="isotope">

                    <?php foreach ($datas as $data) : ?>
                        <article
                            data-item
                            data-title="<?php echo $data['title']; ?>"
                            data-category="<?php echo $data['category']; ?>"
                            data-reference="<?php echo $data['reference']; ?>"
                            class="isotope__item col-lg-4 col-md-4 col-sm-6">
                            <img src='img/<?php echo $data['img']; ?>'/>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <div data-page data-page-profil class="animated fadeIn">
                <section class="introduction">
                    <h1 class="introduction__title">Mon nom est <br> Dai Gondo</h1>
                    <div class="separator"></div>
                    <div class="introduction__description">About</div>
                    <div class="introdcution__paragraph">
                        <p>
                            Dai Gondo is an young independant<br>
                            french/japanese graphic designer,<br>
                            art director and illustrator based in Paris.<br>
                            Nothing more.
                        </p>
                        <p>
                            He is available for hiring<br>
                            and freelance collaboration.
                        </p>
                    </div>
                </section>
                <section class="introduction container">
                    <h1 class="introduction__title">Things he enjoys</h1>
                    <div class="separator"></div>
                        <div class="row">
                            <div class="col-md-6 block wow fadeIn" data-wow-duration="1s">
                                <div class="introduction__picture">
                                    <img src="img/profile/shoe.png" alt="Tiger"/>
                                </div>
                                <h2 class="introduction__title">Great Scott !</h2>
                                <div class="introdcution__paragraph">
                                    <p>
                                        "Back to the future" is probably his<br>
                                        favorite movie. But he also likes prison<br>
                                        movies or a good film plenty of hungry<br>
                                        zombies
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 block wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="introduction__picture">
                                    <img src="img/profile/gun.png" alt="Tiger"/>
                                </div>
                                <h2 class="introduction__title">Call of Duty</h2>
                                <div class="introdcution__paragraph">
                                    <p>                                    
                                        He often plays video games like Call of Duty<br>
                                        with office colleagues, and kicks some<br>
                                        amazing goals in Fifa.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 block wow fadeIn" data-wow-duration="1s" data-wow-delay="2s">
                                <div class="introduction__picture">
                                    <img src="img/profile/nas.png" alt="Tiger"/>
                                </div>
                                <h2 class="introduction__title">It was written</h2>
                                <div class="introdcution__paragraph">
                                    <p>
                                        Nas is certainly the number one among hip hop<br>
                                        artists for Dai, However he also listens to pop music<br>
                                        (The Lumineers, Fleetwood Mac) or good <br>
                                        old Rock 'n' roll.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 block">
                                <div class="introduction__picture wow fadeIn" data-wow-duration="1s" data-wow-delay="3s">
                                    <img src="img/profile/tiger.png" alt="Tiger"/>
                                </div>
                                <h2 class="introduction__title">Animals</h2>
                                <div class="introdcution__paragraph">
                                    <p>
                                        He gets along very well with animals.<br>
                                        He cares for red pandas, koalas,<br> 
                                        hedgehogs and his cat Bimi even if he eats<br> 
                                        all his plants!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="separator"></div>
                                <div class="introdcution__paragraph">
                                    <p>
                                        Special thanks to his friend and room-mate<br> 
                                        <a href="http://benjamin-devaublanc.com">Benjamin Devaublanc</a> who did the web development in<br>
                                        exchange of washing the dishes during 2 long weeks.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
            <div data-page data-page-contact class="animated fadeIn">
                <section class="introduction">
                    <h1 class="introduction__title">Say hey to Dai !</h1>
                    <div class="separator"></div>
                    <div class="introduction__description">About</div>
                    <div class="introdcution__paragraph">
                        <p>
                            For any proposal, collaboration,<br>
                            or information, please don't hesitate<br>
                            to contact Dai Gondo
                        </p>
                        <p>
                            <a href="#" class="introduction__link">daigondo@gmail.com</a>
                        </p>
                    </div>
                </section>
            </div>
        </section>
    </div>

    <footer class="footer">
        &copy; All right Reserved 2015. Copyright Dai Gondo
    </footer>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/bundle.js"></script>

</body>
</html>
