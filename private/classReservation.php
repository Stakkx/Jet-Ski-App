<?php
require_once('class_model.php');
require('classEquipement.php');

class Reservation extends Equipement {
    
    private static $numRes;
    private $dateDebut;
    private $dateFin;
    private $activites;
    private $nbEquipements;
    private $moniteurs;
    private $prixTotal;
    //private $idClient = Clients::$id;
    //private $idEquipement = Equipement::getId(); // Parent et non Equipement pour récupération d'un élément static dans la classe parent

    
    public function __construct($dd, $df, $a, $nbEq, $m, $p) {
        $this->dateDebut = $dd;
        $this->dateFin = $df;
        $this->activites = $a;
        $this->nbEquipements = $nbEq;
        $this->moniteurs = $m;
        $this->prixTotal = $p;
        self::$numRes++;
    }

    // GETTERS / SETTERS
    public function getNumRes() {return $this->numRes;}

    public function setNumRes($numRes) {$this->numRes = $numRes;}

    public function getDateDebut() {return $this->dateDebut;}

    public function setDateDebut($dateDebut) {$this->dateDebut = $dateDebut;}

    public function getDateFin() {return $this->dateFin;}

    public function setDateFin($dateFin) {$this->dateFin = $dateFin;}

    public function getActivites() {return $this->activites;}

    public function setActivites($activites) {$this->activites = $activites;}

    public function getNbEquipements() {return $this->nbEquipements;}

    public function setNbEquipements($nbEquipements) {$this->nbEquipements = $nbEquipements;}

    public function getMoniteurs() {return $this->moniteurs;}

    public function setMoniteurs($moniteurs) {$this->moniteurs = $moniteurs;}

    public function getPrixTotal() {return $this->prixTotal;}

    public function setPrixTotal($prixTotal) {$this->prixTotal = $prixTotal;}

    public function getIdClient() {return $this->idClient;}

    public function setIdClient($idClient) {$this->idClient = $idClient;}

    public function getIdEquipement() {return $this->idEquipement;}

    public function setIdEquipement($idEquipement) {$this->idEquipement = $idEquipement;}

    public function __toString() {
        return self::$numRes . ', ' . $this->idClient . ', ' . $this->idEquipement . ', ' . $this->dateDebut . ', ' . $this->dateFin . ', ' . $this->activites . ', ' . $this->nbEquipements . ', ' . $this->moniteurs . ', ' . $this->prixTotal;
    }

    public static function getAllReservations() {
        Model::Init();
        $req = Model::$pdo->query("SELECT * FROM reservations");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public static function getOneReservation($id) {
        Model::Init();
        $req = Model::$pdo->query("SELECT * FROM reservations WHERE id = $id");
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public static function ajouterReservation() {
        Model::Init();
        $req = Model::$pdo->prepare("INSERT INTO reservations(id_client, id_equipement, datedebut, datefin, activites) VALUES (?,?,?,?,?)");
        $req->execute(array($_POST['idClient'], $_POST['idEquipement'], $_POST['dateDeb'], $_POST['dateFin'], $_POST['activites']));
    }

    public static function supprimerReservation($id) {
        Model::init();
        $req = Model::$pdo->exec("DELETE FROM reservations WHERE id = $id");
    }

    public static function updateReservation($id) {
        Model::Init();
        $req = Model::$pdo->prepare("UPDATE reservations SET datedebut = ?, datefin = ?, activites = ? WHERE id = $id");
        $req->execute(array($_POST['datedebut'], $_POST['datefin'], $_POST['activites']));
    }

    public static function getNomReservation($id){
        Model::Init();
        $req = Model::$pdo->prepare("SELECT cl.nom FROM reservations res INNER JOIN clients cl ON cl.id = res.id_client WHERE  res.id_client = ?");
        $req->execute(array($id));
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}