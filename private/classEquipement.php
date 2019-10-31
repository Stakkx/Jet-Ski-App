<?php
require_once('class_model.php');

class Equipement {

    // Attributs
    protected static $id;
    private $nom;
    private $descriptif;
    private $puissance;
    private $etat;
    private $coutHT;

    // Méthodes
    public function __construct ($n,$d,$p,$e,$c) {
        $this->nom = $n;
        $this->descriptif = $d;
        $this->puissance = $p;
        $this->etat = $e;
        $this->coutHT = $c;
        self::$id++;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getDescriptif()
    {
        return $this->descriptif;
    }

   
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;
    }

    public function getPuissance()
    {
        return $this->puissance;
    }

   
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

    }

    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    public function getCoutHT()
    {
        return $this->coutHT;
    }

    public function setCoutHT($coutHT)
    {
        $this->coutHT = $coutHT;
    }

    public function __toString() {
        return self::$id . ', ' . $this->nom . ', ' . $this->descriptif . ', ' . $this->puissance . ', ' . $this->etat . ', ' . $this->coutHT;
    }

    public static function getAllEquipements() {
        Model::Init();
        $req = Model::$pdo->query("SELECT * FROM equipements");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public static function getOneEquipements($id) {
        Model::Init();
        $req = Model::$pdo->query("SELECT * FROM equipements WHERE id = $id");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public static function ajouterEquipement() {
        Model::Init();
        $req = Model::$pdo->prepare("INSERT INTO equipements(nom, descriptif, puissance, etat) VALUES (?,?,?,?) ");
        $req->execute(array($_POST['nom'], $_POST['desc'], $_POST['puissance'], $_POST['etat']));
        echo "<script>window.location.replace(\"gestionEquipements.php\")</script>";
    }

    public static function supprimerEquipement($id) {
        Model::init();
        $req = Model::$pdo->exec("DELETE FROM equipements WHERE id = $id");
        echo "<script>window.location.replace(\"gestionEquipements.php\")</script>";
    }

    public static function updateEquipements($id) {
        Model::Init();
        $req = Model::$pdo->prepare("UPDATE equipements SET nom = ?, descriptif = ?, puissance = ?, etat = ? WHERE id = $id");
        $req->execute(array($_POST['nom'], $_POST['desc'], $_POST['puissance'], $_POST['etat']));
    }

    
}



// TEST



// $data = Equipement::getAllEquipements();
// foreach ($data as $val) {
//     echo $val->nom . ' ' . $val->descriptif . ' ' . $val->puissance . '<br>';
// }

// Equipement::ajouterEquipement();
/* ?> 

<!-- // <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <meta http-equiv="X-UA-Compatible" content="ie=edge">
//     <title>Document</title>
// </head>
// <body>
//     <form action="classEquipement.php" method="POST">
//         <label for="nom">Nom </label><input type="text" name="nom" id="nom"><br>
//         <label for="desc">Descriptif </label><input type="text" name="desc" id="desc"><br>
//         <label for="puissance">Puissance </label><input type="text" name="puissance" id="puissance"><br>
//         <label for="etat">Etat </label><input type="text" name="etat" id="etat"><br>
//         <label for="cout">Cout </label><input type="text" name="cout" id="cout"><br>

//         <input type="submit" value="Envoyer">
//     </form>
// </body>
// </html> -->*/





