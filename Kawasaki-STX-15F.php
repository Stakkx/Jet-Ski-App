<!-- ACCUEIL -->
<?php
require('inc/head.php');
require('inc/header.php');

?>
<!-- CONTENU PRINCIPAL -->
<main class="container box-box STX">

    <h2>Kawasaki-STX-15F</h2>
    <nav class="navbaritem navbar-expand-md">
        <!-- NAVBAR -->


        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <!-- BOUTON MENU RESPONSIVE -->
            <i class="fas fa-bars"></i>
        </button> <!-- FIN BOUTON MENU RESPONSIVE -->

        <div class="collapse navbar-collapse justify-content-around" id="collapse_target">

            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="#description">Description</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#caract">Caractéristique</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#multimedia">Multimédia</a>
                </li>

            </ul>

        </div>

    </nav> <!-- FIN NAVBAR -->
    <div class="row">
        <!-- ROW -->

        <div class="col-md-6">
            <!-- COL AVEC IMAGE -->
            <a href="img/E-jetski1.png" target="_blank" rel="noopener">
                <img class="item1" src="img/E-jetski1.png" alt="">
            </a>
        </div>

        <div class="col-md-6">
        <h3 id="description">Description</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Neque unde, exercitationem mollitia, eligendi facilis alias
                    dolorem fugit eius optio ab, sit numquam consequuntur ipsa!
                    Incidunt, ipsum. Odio animi pariatur esse!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Neque unde, exercitationem mollitia, eligendi facilis alias
                    dolorem fugit eius optio ab, sit numquam consequuntur ipsa!
                    Incidunt, ipsum. Odio animi pariatur esse!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Neque unde, exercitationem mollitia, eligendi facilis alias
                    dolorem fugit eius optio ab, sit numquam consequuntur ipsa!
                    Incidunt, ipsum. Odio animi pariatur esse!

                </p>
            </div>
    </div>



    <div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3 id="caract">Caractéristique</h3>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">
            <div class="container moteur">
                <h4>Moteur</h4>

                <table class="table">
                    <tbody>
                        <tr>
                            <td>Type de moteur</td>
                            <td>Quatre cylindres en ligne 4 temps à refroidissement liquide</td>
                        </tr>
                        <tr>
                            <td>Cylindrée</td>
                            <td>1.498 cm³</td>
                        </tr>
                        <tr>
                            <td>Alésage x course</td>
                            <td>83 x 69.2 mm</td>
                        </tr>
                        <tr>
                            <td>Taux de compression</td>
                            <td>10.6:1</td>
                        </tr>
                        <tr>
                            <td>Système de distribution</td>
                            <td>Double ACT, 16 soupapes</td>
                        </tr>
                        <tr>
                            <td>Système d'alimentation</td>
                            <td>Injection: Ø 60 mm x 1</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="col-md-6">
            <div class="container performances">
                <h4>Performances</h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Puissance maximale</td>
                            <td>152 ch {112 kW} / 7.500 tr/min</td>
                        </tr>
                        <tr>
                            <td>Couple maximal</td>
                            <td>144 N•m {14.7 kgf•m} / 7,250 tr/min</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container dimensions">
                <h4>Dimensions</h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>L x l x H</td>
                            <td>3,120 x 1,180 x 1,050 mm</td>
                        </tr>
                        <tr>
                            <td>Capacité de carburant</td>
                            <td>62 litres</td>
                        </tr>
                        <tr>
                            <td>Poids tous pleins faits</td>
                            <td>383 kg</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <h3 id="multimedia">Multimédia</h3>
        </div>
    </div>
 
    <section class="gallery py-5">
        <div class="container">

                <div class="row no-gutters">
                    <div class="lightbox-content col-md-4">
                        <a href="img/Kawasaki-STX-2.jpg" data-lightbox="photograph">
                            <img src="img/Kawasaki-STX-2.jpg" class="img-fluid" alt="">
                        </a>    
                    </div>

                    <div class="lightbox-content col-md-4">
                        <a href="img/Kawasaki-STX-3.jpg" data-lightbox="photograph">
                            <img src="img/Kawasaki-STX-3.jpg" class="img-fluid" alt="">
                        </a>    
                    </div>

                    <div class="lightbox-content col-md-4">
                        <a href="img/Kawasaki-STX-4.jpg" data-lightbox="photograph">
                            <img src="img/Kawasaki-STX-4.jpg" class="img-fluid" alt="">
                        </a>    
                    </div>
                </div>
        </div>
    </section>

</main>
<!-- FIN CONTENU PRINCIPAL -->
<?php
require('inc/footer.php');
?>