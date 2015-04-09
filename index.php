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
                    <h1 class="introduction__title">Thing he enjoy</h1>
                    <div class="separator"></div>
                        <div class="row">
                            <div class="col-md-6 block">
                                <div class="introduction__picture">
                                    <img src="img/profile/shoe.png" alt="Tiger"/>
                                </div>
                                <h2 class="introduction__title">Great Scott !</h2>
                                <div class="introdcution__paragraph">
                                    <p>
                                        Return to the future is his probably favorite <br>
                                        film. But he also likes prison movies or a <br>
                                        good movie of hungry zombies
                                    </p>
                                </div>                            
                            </div>

                            <div class="col-md-6 block">
                                <div class="introduction__picture">
                                    <img src="img/profile/gun.png" alt="Tiger"/>
                                </div>
                                <h2 class="introduction__title">Call of Dutty</h2>
                                <div class="introdcution__paragraph">
                                    <p>
                                        Occasionally he plays video games like Call <br>
                                        off duty with office colleague, and kill<br>
                                        some amazing goals on Fifa.
                                    </p>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 block">
                                <div class="introduction__picture">
                                    <img src="img/profile/nas.png" alt="Tiger"/>
                                </div>
                                <h2 class="introduction__title">It was written</h2>                            
                                <div class="introdcution__paragraph">
                                    <p>
                                        Nas is certainly the number one of hip hop artist <br>
                                        for Dai, but also listening pop music <br>
                                        (The Lumineers, Fleetwood Mac) or good <br>
                                        old Rock 'n' roll.
                                    </p>
                                </div>                            
                            </div>

                            <div class="col-md-6 block">
                                <div class="introduction__picture">
                                    <img src="img/profile/tiger.png" alt="Tiger"/>
                                </div>
                                <h2 class="introduction__title">Animal</h2>
                                <div class="introdcution__paragraph">
                                    <p>
                                        He gets along very well with animals. <br>
                                        He care red pandax, koala, hedgehog and <br>
                                        her cat Bimi even if he eats all his plants !
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
    <script type="text/javascript" src="js/bundle.js"></script>

</body>
</html>
