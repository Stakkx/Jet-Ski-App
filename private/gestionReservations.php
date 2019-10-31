<?php
require('classReservation.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
        //FONCTION EN JS POUR CONFIRMER LA SUPRESSION
        function confirmation(){
            if ( confirm( "Êtes-vous sûre de vouloir supprimer cette entrée ?" ) ) {
                return true;
        } else {
            return false;
        }
    }
    </script>

</head>

<body>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="gestionEquipements.php">Equipements</a></li>
            <li class="breadcrumb-item"><a href="gestionEffectifs.php">Effectifs</a></li>
            <li class="breadcrumb-item active" aria-current="page">Réservations</li>
            <li class="breadcrumb-item"><a href="gestionClients.php">Clients</a></li>
        </ol>
    </nav>


    <div class="text-center">
        <h1> Gestion réservations</h1>
    </div>
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date début</th>
                <th scope="col">Date fin</th>
                <th scope="col">Activité</th>
                <th scope="col">Id client</th>
                <th scope="col">Nom client</th>
                <th scope="col">Id équipement</th>
                <th scope="col"></th>

                
            </tr>
        </thead>
        <tbody>

            <?php //BOUCLE POUR AFFICHER TOUS LES CLIENTS DANS LE TABLEAU
            $tabResa = Reservation::getAllReservations();



            foreach ($tabResa as $val) {
                echo "<tr><th scope='row'>" . $val->id . "</th>
                <td>" . $val->datedebut . "</td>
                <td>" . $val->datefin . "</td>
                <td>" . $val->activites . "</td>
                <td>" . $val->id_client . "</td>
                <td>" . (Reservation::getNomReservation($val->id_client))[0]['nom'] . "</td>
                <td>" . $val->id_equipement . "</td>
                <td><a href='pageModificationReservation.php?id=".$val->id."'>Modifier</a>/<a onclick='return confirmation();' href='gestionReservations.php?id=".$val->id."'>Supprimer</a></td>
                </tr>";
            }

            ?>

        </tbody>
    </table>

    <button type="button" class="btn btn-primary" onclick="location.href='ajout_réservation_admin.php'" >Ajouter</button>

    <div class="container">

        <div class="row align-items-end">
            <div class="col">
            </div>
            <div class="col">
            </div>
            <div class="col">
            <button type="button" onclick="location.href='panelAdmin.php'" class="btn round btn-secondary">Retour panel</button>
            </div>
        </div>
    </div>

    <br>
    <br>


    <?php
    require('appelFonctionsRéservations.php'); // LES FONCTIONS D'AJOUT ET DE SUPPRESSION
    ?>