<html lang="it">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Description" content="">

    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/images/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Extra fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Merienda&display=swap" rel="stylesheet">

    <!-- Slick Carousel -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    
    <!-- Sweet alert 2 -->
    <link rel="stylesheet" type="text/css" href="/css/sweetalert2.min.css" />
    
    <!-- Font awesome -->
    <link rel="stylesheet" type="text/css" href="/css/all.css" />

    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <title><?php echo $title; ?></title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-subcontainer-slider-page">
                <a href="/"><img src="/images/new_logo.png" /></a>
                <div class="menu-header">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($title == 'Sara Relax Home' || $title == 'Sara Home' || $title == 'Sara Relax Chalet') echo 'active'; ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Alloggi
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item <?php if ($title == 'Sara Relax Home') echo 'active'; ?>" href="/accomodations/saraRelaxHome.php">Sara Relax Home</a>
                                <a class="dropdown-item <?php if ($title == 'Sara Relax Chalet') echo 'active';?>" href="/accomodations/saraRelaxChalet.php">Sara Relax Chalet</a>
                                <a class="dropdown-item <?php if ($title == 'Sara Home') echo 'active'; ?>" href="/accomodations/saraHome.php">Sara Home</a>
                            </div>
                        </li>
                    </ul>
                    <a class="<?php if ($title == 'Dove siamo') echo 'active';?>" href="/pages/location.php">Dove Siamo</a>
                    <a class="<?php if ($title == 'Tariffe') echo 'active'; ?>" href="/pages/prices.php">Tariffe</a>
                    <a class="hide-menu <?php if ($title == 'Offerte e Last Minute') echo 'active'; ?>" href="/pages/promo.php"><u>Offerte!</u></a>
                    <a class="<?php if ($title == 'Chi siamo') echo 'active';?>" href="/pages/chi-siamo.php">Chi Siamo</a>
                    <a class="<?php if ($title == 'Contatti') echo 'active';?>" href="/pages/contact.php">Contatti</a>
                </div>
            </div>
        </div>
    </header>

    <header class="header-mobile">
        <div class="container">
            <div class="header-subcontainer-slider-page-mobile">
                <a href="/"><img src="/images/logo 2.png" /></a>
                <i class="fa fa-bars menu-icon-mobile" aria-hidden="true"></i>
                <i class="fa fa-times close-menu-mobile" aria-hidden="true"></i>
            </div>
            <div class="menu-header-mobile">
                <a class="<?php if ($title == 'Sara Relax Home') echo 'active';?>" href="/accomodations/saraRelaxHome.php">Sara Relax Home</a>
                <a class="<?php if ($title == 'Sara Relax Chalet') echo 'active';?>" href="/accomodations/saraRelaxChalet.php">Sara Relax Chalet</a>
                <a class="<?php if ($title == 'Sara Home') echo 'active';?>" href="/accomodations/saraHome.php">Sara Home</a>
                <a class="<?php if ($title == 'Dove siamo') echo 'active';?>" href="/pages/location.php">Dove Siamo</a>
                <a class="<?php if ($title == 'Tariffe') echo 'active';?>" href="/pages/prices.php">Tariffe</a>
                <a class="hide-menu <?php if ($title == 'Offerte e Last Minute') echo 'active'; ?>" href="/pages/promo.php"><u>Offerte!</u></a>
                <a class="<?php if ($title == 'Chi siamo') echo 'active';?>" href="/pages/chi-siamo.php">Chi Siamo</a>
                <a class="<?php if ($title == 'Contatti') echo 'active';?>" href="/pages/contact.php">Contatti</a>
            </div>
        </div>
    </header>