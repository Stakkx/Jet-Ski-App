<?php
require('clients.class.php');

//POUR EXECUTER LA MODIFICATION


header('Location: gestionClients.php'); //PERMET DE RETOURNER SUR LA MEME PAGE APRES LA MODIF


Clients::modifierClients($_POST['idddd']);//CA VA CHERCHER LA FONCTION DANS LA CLASSE CLIENT

