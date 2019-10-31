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


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="gestionEquipements.php">Equipement</a></li>
        <li class="breadcrumb-item active" aria-current="page">Effectifs</li>
        <li class="breadcrumb-item"><a href="gestionReservations.php">Réservations</a></li>
        <li class="breadcrumb-item"><a href="gestionClients.php">Clients</a></li>
    </ol>
</nav>

<body>

    <div class="text-center">
        <h1> Gestion effectifs</h1>
    </div>
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">N° sécurité sociale</th>
                <th scope="col">Date d'embauche</th>
                <th scope="col">Date dernière visite médicale</th>
                <th scope="col">Statut contrat de travail</th>
                <th scope="col">Numéro de permis côtier</th>
                <th scope="col">Statut d'activité</th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Yamaha</td>
                <td>Scooter des mers performant</td>
                <td>120ch</td>
                <td>HS</td>
                <td>1515151€</td>
                <td> <a href="#">Modifier</a>/ <a href="#">Supprimer</a> </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>HS</td>
                <td>1515151€</td>
                <td> <a href="#">Modifier</a>/ <a href="#">Supprimer</a> </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>HS</td>
                <td>1515151€</td>
                <td> <a href="#">Modifier</a>/ <a href="#">Supprimer</a> </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>HS</td>
                <td>Ok</td>
                <td>HS</td>
                <td>HS</td>
                <td>1515151€</td>
                <td> <a href="#">Modifier</a>/ <a href="#">Supprimer</a> </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>HS</td>
                <td>1515151€</td>
                <td> <a href="#">Modifier</a>/ <a href="#">Supprimer</a> </td>
            </tr>
        </tbody>
    </table>


    <button type="button" class="btn btn-primary">Ajouter</button>
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
</body>
</html>