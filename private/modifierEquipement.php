<?php
require('classEquipement.php');

//POUR EXECUTER LA MODIFICATION


header('Location: gestionEquipements.php'); //PERMET DE RETOURNER SUR LA MEME PAGE APRES LA MODIF


Equipement::updateEquipements($_POST['idddd']);//CA VA CHERCHER LA FONCTION DANS LA CLASSE CLIENT
