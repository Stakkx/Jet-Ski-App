<?php

/*if (isset($_POST['formReservation'])) {
    Reservation::ajouterReservation();
}*/

if (isset($_GET['id'])) {
    Reservation::supprimerReservation($_GET['id']);
}