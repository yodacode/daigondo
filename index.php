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

    <header class="header">
        <div class="container-fluid">
            <a href="#" class="header__logo">
                <svg
                   xmlns:dc="http://purl.org/dc/elements/1.1/"
                   xmlns:cc="http://creativecommons.org/ns#"
                   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                   xmlns:svg="http://www.w3.org/2000/svg"
                   xmlns="http://www.w3.org/2000/svg"
                   viewBox="0 0 558.8667 210.17332"
                   height="210.17332"
                   width="558.8667"
                   xml:space="preserve"
                   version="1.1"
                   id="svg2"><metadata
                     id="metadata8"><rdf:RDF><cc:Work
                         rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type
                           rdf:resource="http://purl.org/dc/dcmitype/StillImage" /></cc:Work></rdf:RDF></metadata><defs
                     id="defs6" /><g
                     transform="matrix(1.3333333,0,0,-1.3333333,0,210.17333)"
                     id="g10"><g
                       transform="scale(0.1)"
                       id="g12"><path
                         id="path14"
                         style="fill:none;stroke:#5173c2;stroke-width:48.05390167;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="m 24.0273,24.0195 4143.43,0 0,1528.24 -4143.43,0 0,-1528.24 z" /><path
                         id="path16"
                         style="fill:none;stroke:#5173c2;stroke-width:48.05390167;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="m 4187.65,689.715 -4163.6227,0" /><g
                         transform="scale(10)"
                         id="g18"><text
                           id="text20"
                           style="font-variant:normal;font-weight:500;font-size:54.06069946px;font-family:Futura;-inkscape-font-specification:Futura-Medium;writing-mode:lr-tb;fill:#5173c2;fill-opacity:1;fill-rule:nonzero;stroke:none"
                           transform="matrix(1,0,0,-1,42.1063,88.5531)"><tspan
                             id="tspan22"
                             y="0"
                             x="0 37.246101 77.290009 93.233406 109.91651 155.45071 203.75693 249.39751 288.64951">DAI GONDO</tspan></text>
                <text
                           id="text24"
                           style="font-variant:normal;font-weight:500;font-size:34.26210022px;font-family:Futura;-inkscape-font-specification:Futura-Medium;writing-mode:lr-tb;fill:#5173c2;fill-opacity:1;fill-rule:nonzero;stroke:none"
                           transform="matrix(1,0,0,-1,73.5438,24.923)"><tspan
                             id="tspan26"
                             y="0"
                             x="0 28.858398 41.439003 61.982895 82.526787 101.3139 109.84612 126.17422 136.74742 161.6239 180.57899 194.48128 203.01254 223.52324 242.31035 261.26544">Graphic Designer</tspan></text>
                </g></g></g></svg>
            </a>
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
            <div class="separator"></div>
            <div class="introduction__description">Portfolio</div>
        </section>
        
        <div id="isotope" class="isotope">
            <?php for ($i=1; $i < 27; $i++) : ?>
                <article class="isotope__item col-lg-4 col-md-4 col-sm-6" data-item>
                    <img src='img/img<?php echo $i; ?>.jpg'/>
                </article>
            <?php endfor; ?>

        </div>
    </section>
    <script type="text/javascript" src="js/bundle.js"></script>

</body>
</html>
