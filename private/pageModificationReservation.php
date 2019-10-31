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


</head>

<body>

<div class="text-center">
<h1>Modification réservation</h1>
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
                <th scope="col">Id équipement</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
              
            <?php                 // AFFICHAGE D'UN SEUL CLIENT DANS LE FORM
                $idc=$_GET['id'];  
                $resa= Reservation::getOneReservation($idc);

                foreach ($resa as $val) {
                    $idd= $val->id;
                    $datedebut= $val->datedebut;
                    $datefin= $val->datefin;
                    $activite= $val->activites;
                    $id_client= $val->id_client;
                    $id_equipement= $val->id_equipement; 
                }

                ?>

                <form action="modifierReservation.php" method="POST" >                 
                
                <td><input type="text" name="idddd" readonly class="form-control-plaintext" size="1" value="<?php echo $idd; ?>"></td>
                <td><input type="text" name="datedebut" size="8" value="<?php echo $datedebut; ?>"></td>
                <td><input type="text" name="datefin" size="8" value="<?php echo $datefin; ?>"></td>
                <td><input type="text" name="activites" size="8" value="<?php echo $activite; ?>"></td>
                <td><input type="text" name="id_client" size="8" value="<?php echo $id_client; ?>"></td>
                <td><input type="text" name="id_equipement" size="8" value="<?php echo $id_equipement; ?>"></td>

                <td><button type="submit" class="btn btn-primary" name="modifReservation" >Modifier</button></td>
                </form>
            </tr>
        </tbody>
    </table>
    
    <a href="gestionReservations.php"> <button type="button" class="btn btn-light">Retour</button> </a>


</body>
</html>