<?php

if (isset($_POST['formEquipement'])) {
    Equipement::ajouterEquipement();
}

if (isset($_GET['id'])) {
    Equipement::supprimerEquipement($_GET['id']);
}