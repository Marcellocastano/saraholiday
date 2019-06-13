<?php $title= "Contatti"; ?>
<?php include_once("../includes/header.php"); ?>

    <section class="contact-container">
        <div class="container-slider pbottom">
            <div class="container">
                <div class="row">
                    <div class="accomodation-title">
                        <h1>Contattaci</h1>
                        <h5>Utilizza il form sottostante per metterti in contatto con noi, altrimenti chiamaci per maggiori informazioni.</h5>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 contact-img">
                        <div class="contact-form">
                            <form name="formmail" method="post" action="https://formspree.io/marcello.castano@hotmail.it" onsubmit="return controlloForm()">

                                <input type="hidden" name="_subject" value="Messaggio dal sito" />
                                <input type="hidden" name="_next" value="/pages/thankyoupage.php" />

                                <label for="nome">Nome e Cognome</label>
                                <input type="text" id="nome" name="nome" placeholder="Nome e Cognome">

                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Email">

                                <label for="telefono">Telefono</label>
                                <input type="number" id="telefono" name="telefono" placeholder="Numero di telefono">

                                <label for="messaggio">Messaggio</label>
                                <textarea id="messaggio" name="messaggio" placeholder="Scrivi il tuo messaggio"></textarea>

                                <input class="custom-button-green" type="submit" value="Invia Richiesta">

                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 contact-detail-container">
                        <div class="contact-detail">
                            <div class="accomodation-title">
                                <h1>I nostri contatti</h1>
                            </div>
                            <div class="contact-box">
                                <p class="number-contact email-contact"><i class="fas fa-phone"></i> Sara Holiday Homes: <a href="tel:3755742343">375-5742343</a></p>
                                <p class="number-contact email-contact"><i class="fas fa-phone"></i> Attilio: <a href="tel:3407863865">340-7863865</a></p>
                                <p class="number-contact email-contact"><i class="fas fa-phone"></i> Sara: <a href="tel:3406919898">340-6919898</a></p>
                                <p class="number-contact email-contact"><i class="far fa-envelope"></i> Email: <a href="mailto:info@studiocastano.it?subject=Informazioni\Prenotazioni Sara Holiday" data-toggle="tooltip"> info@studiocastano.it</a></p>
                            </div>
                            <ul class="list-social-icons">
                                <li><a href="https://www.facebook.com/SaraRelaxHome/"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                                <li><a href="https://www.instagram.com/SaraRelaxHome/"><i class="fab fa-instagram fa-2x"></i></a></li>
                                <li><a href="https://www.twitter.com/SaraRelaxHome/"><i class="fab fa-twitter fa-2x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       
   <?php include_once("../includes/footer.php"); ?>

   <script>
    function verificaEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    function controlloForm() {
        var nome = document.forms["formmail"]["nome"].value;
        var email = document.forms["formmail"]["email"].value;
        var telefono = document.forms["formmail"]["telefono"].value;
        var messaggio = document.forms["formmail"]["messaggio"].value;

        if (nome == "" || email == "" || messaggio == "") {
            Swal.fire({
                title: 'Error!',
                text: 'I campi Nome, Email e Messaggio sono obbligatori!',
                type: 'error',
                confirmButtonText: 'Ok'
            })
            return false;
        }
        else if (verificaEmail(email) !== true) {
            Swal.fire({
                title: 'Error!',
                text: 'L\'indirizzo email non è corretto!',
                type: 'error',
                confirmButtonText: 'Ok'
            })
            return false;  
        }else{
            return true;
        }
    }
   </script>

    </body>
    
    </html>
