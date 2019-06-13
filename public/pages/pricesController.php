<?php
    $accomodation = $_POST['accomodation'];
    $month = $_POST['month'];
    
    if (isset($accomodation, $month)){
        $jsonSrh = file_get_contents("../tariffe_srh.json");
        $jsonSrc = file_get_contents("../tariffe_src.json");
        $jsonSh = file_get_contents("../tariffe_sh.json");
    
        $objitemsSrh = json_decode($jsonSrh, true);
        $objitemsSrc = json_decode($jsonSrc, true);
        $objitemsSh = json_decode($jsonSh, true);
    
        echo '<pre>' . print_r($objitemsSrh) . '</pre>';

    // $findById = function($id) use ($objname) {
    // foreach (json_decode($objname) as $friend) {
    //     if ($friend->id === $id) return $friend->name;
    // }
    // return;
    // };

    // echo $findById('6') ?: 'No record found.';



    }else{
        $result = "";
    }
?>


<html lang="it">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Description"
        content="Invia newsletter gratis per sempre con 4Dem, il software 100% made in Italy. Per te contatti illimitati e 500 email/giorno a 0€ per sempre. Scopri di più!">

    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/images/new_logo.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Extra fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Slick Carousel -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

    <title>Prices Sara Holiday</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-subcontainer-slider-page">
                <a href="../"><img src="/images/logo 2.png" /></a>
                <div class="menu-header">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Accomodations
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/accomodations/saraRelaxHome.html">Sara Relax Home</a>
                                <a class="dropdown-item" href="/accomodations/saraRelaxChalet.html">Sara Relax Chalet</a>
                                <a class="dropdown-item" href="/accomodations/saraHome.html">Sara Home</a>
                            </div>
                        </li>
                    </ul>
                    <a href="prices.html" class="active">Prices</a>
                    <a href="location.html">Location</a>
                    <a href="contact.html">Contact</a>
                </div>
            </div>
        </div>
    </header>

    <header class="header-mobile">
        <div class="container">
            <div class="header-subcontainer-slider-page-mobile">
                <a href="../"><img src="/images/logo 2.png" /></a>
                <i class="fa fa-bars menu-icon-mobile" aria-hidden="true"></i>
                <i class="fa fa-times close-menu-mobile" aria-hidden="true"></i>
            </div>
            <div class="menu-header-mobile">
                <a href="/accomodations/saraRelaxHome.html">Sara Relax Home</a>
                <a href="/accomodations/saraRelaxChalet.html">Sara Relax Chalet</a>
                <a href="/accomodations/saraHome.html">Sara Home</a>
                <a href="prices.html" class="active">Prices</a>
                <a href="location.html">Location</a>
                <a href="contact.html">Contact</a>
            </div>
        </div>
    </header>

    <section class="location-container">
        <div class="container-slider pbottom">
            <div class="container">
                <div class="row">
                    <div class="accomodation-title">
                        <h1>Prices</h1>
                    </div>
                    <div class="price-subtitle-container">
                        <p class="subtitle">Tutte le tariffe sono intese a <strong>persona</strong> e a <strong>notte</strong>.</p>
                        <p class="warning subtitle"><span>ATTENZIONE!</span> Non siamo un B&B, il soggiorno <strong>minimo</strong> è per <u>4 persone</u> (la tariffa è uguale da 1 a 4 persone) per <u>3 notti</u> <strong><u>(7 notti luglio e agosto).</u></strong></p>
                        <p class="subtitle"><strong>Clicca</strong> su una delle card, per vedere il dettaglio delle tariffe. Altrimenti utilizza il form per una ricerca specifica.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="thumbnail-row">
                        <div class="overlay">
                            <img src="\images\Sara Relax Home\new\da cellulare 4.2.17 853-min.jpg" onclick="saraRelaxHome()">
                            <p id="srh-prices">Sara Relax Home Prices</p>
                        </div>
                        <div class="overlay">
                            <img src="\images\Sara Relax Chalet\new\20180603_100434-min.jpg" onclick="saraRelaxChalet()">
                            <p id="src-prices">Sara Relax Chalet Prices</p>
                        </div>
                        <div class="overlay">
                            <img src="\images\Sara Home\new\20180327_122000-min.jpg" onclick="saraHome()">
                            <p id="sh-prices">Sara Home Prices</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="tabs" class="srh-table tariffe-table">
                            
                        </div>
                        <div class="service-detail">
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div id="tabs2" class="src-table tariffe-table">
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div id="tabs3" class="sh-table tariffe-table">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="accomodation-title">
                        <h1>Prices</h1>
                    </div>
                    <form action="prices.php" method="post">
                        <div class="form-group">
                            <label for="saraHolidayAccomodation">Seleziona l'alloggio</label>
                            <select class="form-control" id="saraHolidayAccomodation" name="accomodation">
                                <option></option>
                                <option value="srh">Sara Relax Home</option>
                                <option value="src">Sara Relax Chalet</option>
                                <option value="sh">Sara Home</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="saraHolidayMonth">Seleziona il mese</label>
                            <select class="form-control" id="saraHolidayMonth" name="month">
                                <option></option>
                                <option>Gennaio</option>
                                <option>Febbraio</option>
                                <option>Marzo</option>
                                <option>Aprile</option>
                                <option>Maggio</option>
                                <option>Giugno</option>
                                <option>Luglio</option>
                                <option>Agosto</option>
                                <option>Ferragosto</option>
                                <option>Settembre</option>
                                <option>Ottobre</option>
                                <option>Novembre</option>
                                <option>Dicembre</option>
                            </select>
                        </div>
                        <!-- <button type="button" onclick="searchByHome()" class="custom-button">Cerca</button> -->
                        <input type="submit" value="Cerca">
                    </form>
                    <div class="resultSearch">
                    <?php
                        echo $result;
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="row row-footer-slider-page">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p id="company-descr-foot-slider-page">Sara Holiday - Mazara del Vallo | Cell:+39.340.7863865 - +39.340.6919898</p>
                    <div class="social-icon"><a href="https://www.facebook.com/SaraRelaxHome/" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://www.instagram.com/SaraRelaxHome/" target="_blank"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </section>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
    <!-- Slick Carousel -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <script>
        jQuery(document).ready(function () {
    
        //     $('#submit').click(function() {
        //     $.ajax({
        //         url: 'pricesController.php',
        //         type: 'POST',
        //         data: {
        //             accpmodation:$("#saraHolidayAccomodation").val(),
        //             month:$("#saraHolidayMonth").val()
        //         },
        //         success: function(msg) {
                    
        //         }               
        //     });
        // });

            $('.normal-carousel').slick({
                infinite: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                centerMode: true,
                variableWidth: true,
                focusOnSelect: true
            });
            $('.room-carousel').slick({
                infinite: true,
                autoplay: true,
                autoplaySpeed: 6000,
                centerMode: true,
                variableWidth: true,
                focusOnSelect: true,
                dots: true,
                arrows:false
            });
            jQuery('.menu-icon-mobile').click(function () {
                jQuery('.menu-icon-mobile').css('display', 'none')
                jQuery('.close-menu-mobile').css('display', 'block')
                jQuery('.menu-header-mobile').css('display', 'flex')
            })
            jQuery('.close-menu-mobile').click(function () {
                jQuery('.menu-icon-mobile').css('display', 'block')
                jQuery('.close-menu-mobile').css('display', 'none')
                jQuery('.menu-header-mobile').css('display', 'none')
            })
        });
    </script>
    </body>
    
    </html>

<script type="text/javascript" src="../tariffe_srh.json"></script>
<script type="text/javascript" src="../tariffe_src.json"></script>
<script type="text/javascript" src="../tariffe_sh.json"></script>
<script>
    // var local_srh = <?php echo $jsonSrh; ?>
    // console.log(local_srh)
    var local_src = src
    var local_sh = sh
    
    function saraRelaxHome(){
        $('.srh-table').append('<div class="accomodation-title"><h1>Sara Relax Home Prices</h1></div>')
        $.each(local_srh.data, function(key, value) {
            let table_srh;
            if(!$('table').hasClass(value.slug)) {
            $('.srh-table').append('<table class="'+value.slug+'"><thead><th colspan="2">'+value.mese+'</th><tr><th>Ospiti</th><th>Tariffa</th></tr></thead><tbody></tbody></table>');
            }
            table_srh = $('table[class="'+value.slug+'"] tbody');
            var row = $("<tr/>");
              
            row.append($("<td/>").text(value.n_ospiti));
            row.append($("<td/>").text(value.tariffa));
            table_srh.append(row);            
        });
        $('.srh-table').append('</div>')
        $('.srh-table').append('<div class="subtitle"><p>Spese di pulizia finali pari a 100€</p>')
    }
    function saraRelaxChalet(){    
        $('.src-table').append('<div class="accomodation-title"><h1>Sara Relax Chalet Prices</h1></div>')
        $.each(local_src.data, function(key, value) {
            let table_src;
            if(!$('table').hasClass(value.slug)) {
                $('.src-table').append('<table class="'+value.slug+'"><thead><th colspan="2">'+value.mese+'</th><tr><th>Ospiti</th><th>Tariffa</th></tr></thead><tbody></tbody></table>');
            }
            table_src = $('table[class="'+value.slug+'"] tbody');
            var row = $("<tr/>");

            row.append($("<td/>").text(value.n_ospiti));
            row.append($("<td/>").text(value.tariffa));
            table_src.append(row);
        });
    }
    function saraHome(){
        $('.sh-table').append('<div class="accomodation-title"><h1>Sara Home Prices</h1></div>')
        $.each(local_sh.data, function(key, value) {
            let table_sh;
            if(!$('table').hasClass(value.slug)) {
                $('.sh-table').append('<table class="'+value.slug+'"><thead><th colspan="2">'+value.mese+'</th><tr><th>Ospiti</th><th>Tariffa</th></tr></thead><tbody></tbody></table>');
            }
            table_sh = $('table[class="'+value.slug+'"] tbody');
            var row = $("<tr/>");

            row.append($("<td/>").text(value.n_ospiti));
            row.append($("<td/>").text(value.tariffa));
            table_sh.append(row);  
        });
    }
    // function searchByHome(){
    //     let accomodation = $('#saraHolidayAccomodation').val();
    //     let month = $("#saraHolidayMonth").val()
    //     console.log(accomodation + " accomodation")
    //     console.log(local_srh)
    //     $.each(local_srh.data, function(key, value) {
    //         let table_acc;
    //         // if(!$('table').hasClass(value.slug)) {
    //                 console.log("cia")
    //                 console.log(accomodation)
    //             if (value.accomodation == accomodation && value.mese == month){
    //                 $('.resultSearch').append('<table class="'+value.accomodation+'"><thead><th colspan="2">'+value.mese+'</th><tr><th>Ospiti</th><th>Tariffa</th></tr></thead><tbody></tbody></table>');
    //             }
    //         // }
    //         table_acc = $('table[class="'+value.accomodation+'"] tbody');
    //         var row = $("<tr/>");

    //         row.append($("<td/>").text(value.n_ospiti));
    //         row.append($("<td/>").text(value.tariffa));
    //         table_acc.append(row);  
    //     });
    // }
</script>
</html>