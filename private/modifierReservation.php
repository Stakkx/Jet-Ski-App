<?php
require('classReservation.php');

//POUR EXECUTER LA MODIFICATION


header('Location: gestionReservations.php'); //PERMET DE RETOURNER SUR LA MEME PAGE APRES LA MODIF


Reservation::updateReservation($_POST['idddd']);//CA VA CHERCHER LA FONCTION DANS LA CLASSE CLIENT
