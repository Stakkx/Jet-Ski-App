<!-- ACCUEIL -->
<?php
    require('inc/head.php');
    require('inc/header.php');


?>
<!-- CONTENU PRINCIPAL -->
<main class="container box-box"> <!-- CONTAINER -->
        <div class="row"> <!-- ROW -->

            <!-- COL 1 coordonnées + map google -->
            <div class="col-md-6 donnees">
                <h2>Information</h2>
                    <br>
                    <p>Pour toute information complémentaire,<br> 
                    contactez-nous par téléphone au 06 XX XX XX XX.<br>
                    Nous vous répondrons dans les plus brefs délais.
                    </p>

                <h2>Coordonnées</h2>
                    <br>
                    <p>Dynamic-Jet <br>
                    Six-Fours-les-Plages <br>
                    83140 <br>
                    <br>
                    tel : 06 XX XX XX XX <br>
                    contact@dynamic-jet.fr <br>

                <h2>Situez-nous</h2>
                    <br>
                    <div class="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d8243.633806232305!2d5.802494580107251!3d43.071622324589164!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1572337322829!5m2!1sfr!2sfr" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                    </div>   
            </div> <!-- FIN COL 1 coordonnées + map google -->

            <div class="col-md-6 formulaire"> <!-- COL 2 FORMULAIRE -->

                <form method="POST">

                        <h2>Contactez-nous</h2>
                        <br>
                       

                                <div class="form-group">
                                    <label for="nom">Votre nom / Société</label>
                                    <input type="text" class="form-control" placeholder="Votre nom ou le nom de votre société">
                                </div>

                                <div class="form-group">
                                    <label for="email">Votre email</label>
                                    <input type="email" class="form-control" placeholder="mon-mail@gmail.com">
                                </div>

                                <div class="form-group">
                                    <label for="message">Votre message</label>
                                    <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Votre message"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            

                    </form>
            </div> <!-- FIN COL 2 FORMULAIRE -->

        </div> <!-- FIN ROW -->

    </div> <!-- FIN CONTAINER -->
    

      
</main>
<!-- FIN CONTENU PRINCIPAL -->
<?php    
    require('inc/footer.php');
?>