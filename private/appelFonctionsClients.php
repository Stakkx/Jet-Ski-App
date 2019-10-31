<?php

if (isset($_POST['formClient'])) {
    Clients::ajouterClients();
}

if (isset($_GET['id'])) {
    Clients::supprimerClients($_GET['id']);
}