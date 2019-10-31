<?php
require('clients.class.php');
//require('../inc/header.php');
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

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="gestionEquipements.php">Equipements</a></li>
            <li class="breadcrumb-item"><a href="gestionEffectifs.php">Effectifs</a></li>
            <li class="breadcrumb-item"><a href="gestionReservations.php">Réservations</a></li>
            <li class="breadcrumb-item active" aria-current="page">Clients</li>
        </ol>
    </nav>


    <div class="text-center">
        <h1> Gestion clients</h1>
    </div>
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Adresse</th>
                <th scope="col">N° téléphone</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Numéro de permis côtier</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            <?php //BOUCLE POUR AFFICHER TOUS LES CLIENTS DANS LE TABLEAU
            $tabClients = Clients::getClients();

            foreach ($tabClients as $val) {
                echo "<tr><th scope='row'>" . $val->id . "</th>
                <td>" . $val->nom . "</td>
                <td>" . $val->prenom . "</td>
                <td>" . $val->adresse . "</td>
                <td>" . $val->numtel . "</td>
                <td>" . $val->datenaissance . "</td>
                <td>" . $val->numpermis . "</td>
                <td><a href='pageModificationClient.php?id=".$val->id."'>Modifier</a>/<a onclick='return confirmation();' href='gestionClients.php?id=".$val->id."'>Supprimer</a></td>
                </tr>";
            }

            ?>

            <tr>
                <td>
                    <form action="gestionClients.php" method="POST" >                 
                </td>
                <td><input type="text" name="nom" size="8" required></td>
                <td><input type="text" name="prenom" size="8" required></td>
                <td><input type="text" name="adresse" size="8" required></td>
                <td><input type="text" name="numeroTel" size="8" required></td>
                <td><input type="date" name="datenaissance" size="8" required></td>
                <td><input type="text" name="numpermis" size="8"></td>
                <td><button type="submit" class="btn btn-primary" name="formClient" >Ajouter</button></td>
                </form>
            </tr>


        </tbody>
    </table>

    

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
    require('appelFonctionsClients.php'); // LES FONCTIONS D'AJOUT ET DE SUPPRESSION
    ?>

</body>
</html>