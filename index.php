<?php $title= "Sara Holiday Homes"; ?>
<?php include_once("includes/header.php"); ?>

    <div class="container-slider">
        <div class="container">
            <div class="home-title">
                <h1>Welcome to</h1>
            </div>
            <div class="normal-carousel">
                <div data="1">
                    <div class="accomodation-title">
                        <h1 class="title-slide"><a href="/accomodations/saraRelaxHome.php">Sara Relax Home</a></h1>
                    </div>
                    <img class="normal-slide-img d-block" src="images\Home_Carousel\relax1.jpg">
                    <div class="separetor-slider-page">
                        <div class="moga_heading-style4" data-wow-delay="0.1s">
                            <h3></h3>
                        </div>
                    </div>
                </div>
                <div data="2">
                    <div class="accomodation-title">
                        <h1 class="title-slide"><a href="/accomodations/saraRelaxChalet.php">Sara Relax Chalet</a></h1>
                    </div>
                    <img class="normal-slide-img d-block" src="images\Home_Carousel\chalet1.jpg">
                    <div class="separetor-slider-page">
                        <div class="moga_heading-style4" data-wow-delay="0.1s">
                            <h3></h3>
                        </div>
                    </div>
                </div>
                <div data="3">
                    <div class="accomodation-title">
                        <h1 class="title-slide"><a href="/accomodations/saraHome.php">Sara Home</a></h1>
                    </div>
                    <img class="normal-slide-img d-block" src="images\Home_Carousel\home1.jpg">
                    <div class="separetor-slider-page">
                        <div class="moga_heading-style4" data-wow-delay="0.1s">
                            <h3></h3>
                        </div>
                    </div>
                </div>
                <div data="4">
                    <div class="accomodation-title">
                        <h1 class="title-slide"><a href="/accomodations/saraRelaxHome.php">Sara Relax Home</a></h1>
                    </div>
                    <img class="normal-slide-img d-block" src="images\Home_Carousel\relax2.jpg">
                    <div class="separetor-slider-page">
                        <div class="moga_heading-style4" data-wow-delay="0.1s">
                            <h3></h3>
                        </div>
                    </div>
                </div>
                <div data="5">
                    <div class="accomodation-title">
                        <h1 class="title-slide"><a href="/accomodations/saraRelaxChalet.php">Sara Relax Chalet</a></h1>
                    </div>
                    <img class="normal-slide-img d-block" src="images\Home_Carousel\chalet2.jpg">
                    <div class="separetor-slider-page">
                        <div class="moga_heading-style4" data-wow-delay="0.1s">
                            <h3></h3>
                        </div>
                    </div>
                </div>
                <div data="6">
                    <div class="accomodation-title">
                        <h1 class="title-slide"><a href="/accomodations/saraHome.php">Sara Home</a></h1>
                    </div>
                    <img class="normal-slide-img d-block" src="images\Home_Carousel\home2.jpg">
                    <div class="separetor-slider-page">
                        <div class="moga_heading-style4" data-wow-delay="0.1s"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-cards-home">
        <div class="container">
            <div class="row">
                <div class="cards-container">
                    <div class="accomodation-card">
                        <div class="accomodation-card-title">
                            <h4>Sara Relax Home</h4>
                        </div>
                        <div class="accomodation-card-body">    
                            <div class="accomodation-card-text">
                                <p>Villetta indipendente di mq 100 a pochi passi dal mare, con giardino e ampio spazio circostante, oltre 300 m. di area libera per muovervi in libertà, in grado di ospitare fino a 11 persone. E' situata in una zona residenziale molto riservata, nel cuore della località balneare di “Tonnarella” a 250 m. dalla spiaggia bianca e sabbiosa.</p>
                            </div>
                            <div class="accomodation-card-button">
                                <a href="/accomodations/saraRelaxHome.php" class="custom-button">Scopri di più</a>
                            </div>
                        </div>
                    </div>
                    <div class="accomodation-card">
                        <div class="accomodation-card-title">
                            <h4>Sara Relax Chalet</h4>
                        </div>
                        <div class="accomodation-card-body"> 
                            <div class="accomodation-card-text">
                                <p>Casetta indipendente di mq 40, con giardino e ampio spazio circostante. E' situata in una zona residenziale molto riservata, nel cuore della località balneare di “Tonnarella” a 250 m. dalla spiaggia bianca e sabbiosa. E' perfetta per 3 persone, ma all'occorrenza può accoglierne fino ad un massimo di 5, utilizzando il comodo divano letto matrimoniale in soggiorno.</p>
                            </div>
                            <div class="accomodation-card-button">
                                <a href="/accomodations/saraRelaxChalet.php" class="custom-button">Scopri di più</a>
                            </div>
                        </div>
                    </div>
                    <div class="accomodation-card">
                        <div class="accomodation-card-title">
                            <h4>Sara Home</h4>
                        </div>
                        <div class="accomodation-card-body"> 
                            <div class="accomodation-card-text">
                                <p>Luminoso appartamento di mq 80 a pochi passi dal mare, con giardinetto pubblico e 2 balconi a piano terra. E' situata in una zona residenziale molto tranquilla e riservata, a 900 m. dalla località balneare di “Tonnarella” dalla spiaggia bianca e sabbiosa e a 900 m. dal centro storico. E' perfetta per 7 persone e può accoglierne fino a 9.</p>
                            </div>
                            <div class="accomodation-card-button">
                                <a href="/accomodations/saraHome.php" class="custom-button">Scopri di più</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once("includes/footer.php"); ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.normal-carousel').slick({
        infinite: true,
        arrows: false,
        focusOnSelect: false,
        autoplay: true,
        dots: true,
        autoplaySpeed: 2000
        });
    })
    </script>
</body>

</html>