<!DOCTYPE html>
<html>
<head>
    <title>Dai gondo</title>
    <link rel="stylesheet" type="text/css" href="js/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">     
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style>
      body {
        font-family: 'Open Sans', sans-serif;
      }
    </style>
</head>
<body>

    <header class="header">
        <div class="container">
            <a href="#" class="header__logo"></a>
            <nav class="nav">
                <div class="nav__left">
                    <a href="#" class="green">Profil</a>
                    <a href="#" class="yellow">Portfolio</a>
                </div>
                <div class="nav__right">
                    <a href="#" class="red">Contact</a>
                </div>
            </nav>
        </div>
    </header>

    <section class="container-fluid site-content">
        <section class="introduction">
            <h1 class="introduction__title">Morceaux choisis</h1>
            <div class="introduction__description">Portfolio</div>
        </section>
        <div class="row">
        <div id="isotope" class="isotope">
            <?php for ($i=1; $i <= 14; $i++) : ?>
                <article class="isotope__item col-lg-4 col-md-4 col-sm-6" data-item>
                    <img src='img/img<?php echo $i ?>.jpg'/>
                </article>
            <?php endfor; ?>
        </div>
        </div>
    </section>
    <script type="text/javascript" src="js/bundle.js"></script>

</body>
</html>
