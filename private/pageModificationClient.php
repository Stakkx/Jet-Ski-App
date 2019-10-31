<?php
require('clients.class.php');
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


</head>

<body>

<div class="text-center">
<h1>Modification client</h1>
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
            <tr>
              
                <?php                 // AFFICHAGE D'UN SEUL CLIENT DANS LE FORM
                $idc=$_GET['id'];  
                $client= Clients::afficherUnSeulClient($idc);

                foreach ($client as $val) {
                    $idd= $val->id;
                    $nomm= $val->nom;
                    $prenomm= $val->prenom;
                    $adressee= $val->adresse;
                    $numtell= $val->numtel;
                    $datenaissancee= $val->datenaissance;
                    $numpermiss= $val->numpermis;  
                }

                ?>

                <form action="modifierClient.php" method="POST" >                 
                
                <td><input type="text" name="idddd" readonly class="form-control-plaintext" size="1" value="<?php echo $idd; ?>"></td>
                <td><input type="text" name="nom" size="8" value="<?php echo $nomm; ?>"></td>
                <td><input type="text" name="prenom" size="8" value="<?php echo $prenomm; ?>"></td>
                <td><input type="text" name="adresse" size="8" value="<?php echo $adressee; ?>"></td>
                <td><input type="text" name="numerot" size="8" value="<?php echo $numtell; ?>"></td>
                <td><input type="date" name="datenaissance" size="8" value="<?php echo $datenaissancee; ?>"></td>
                <td><input type="text" name="nump" size="8" value="<?php echo $numpermiss; ?>" ></td>

                <td><button type="submit" class="btn btn-primary" name="modifClient" >Modifier</button></td>
                </form>
            </tr>
        </tbody>
    </table>
    
    <a href="gestionClients.php"> <button type="button" class="btn btn-light">Retour</button> </a>


</body>
</html>