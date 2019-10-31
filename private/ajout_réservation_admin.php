<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        label {
            font-weight: bold;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="text-center">
        <h1>Ajout Réservation</h1>
</div>

    <div class="container">
        <form action="traitement.php" method="POST">
            <div class="row">

                <div class="col-md-4">

                    <label for="idRes">N° réservation</label><br>
                    <input type="text" name="idRes" id="idRes" class="form-control"><br>
                </div>

                <div class="col-md-4">
                    <label for="idClient">N° client</label><br>
                    <input type="text" name="idClient" id="idClient" class="form-control"><br>
                </div>

                <div class="col-md-4">
                    <label for="idEquipement">N° équipement</label><br>
                    <input type="text" name="idEquipement" id="idEquipement" class="form-control"><br>
                </div>
            </div>

            <label for="dateDebut">Date Début</label><br>
            <input type="date" name="dateDebut" id="dateDebut" class="form-control w-25"><br>

            <label for="dateFin">Date Fin</label><br>
            <input type="date" name="dateFin" id="dateFin" class="form-control w-25"><br>

            <label for="activite">Activités</label><br>
            <input type="text" name="activite" id="activite" class="form-control w-50"><br>

            <label for="nbEquipement">Nombre d'équipement</label><br>
            <input type="text" name="nbEquipement" id="nbEquipement" class="form-control w-25"><br>

            <label for="moniteur">Moniteur(s)</label><br>
            <input type="text" name="moniteur" id="moniteur" class="form-control w-50"><br>

            <label for="prixRes">Prix total</label><br>
            <input type="text" name="prixRes" id="prixRes" class="form-control w-50"><br><br>

            <input type="submit" value="Ajouter" name="send" class="btn btn-primary">
            <button type="button" onclick="location.href='gestionReservations.php'" class="btn round btn-secondary">Retour gestion réservations</button>
        </form>
    </div>
</body>
</html>