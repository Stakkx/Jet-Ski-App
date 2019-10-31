<?php
require('class_model.php');


class Clients {

    private static $id=0;
    private $nom;
    private $prenom;
    private $adresse;
    private $numeroTel;
    private $dateNaissance;
    private $numeroPermis;


    public function __construct($nom, $prenom, $adresse, $numeroTel, $dateNaissance, $numeroPermis){
        $this->nom= $nom;
        $this->prenom= $prenom;
        $this->adresse= $adresse;
        $this->numeroTel= $numeroTel;
        $this->dateNaissance= $dateNaissance;
        $this->numeroPermis= $numeroPermis;
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

    
    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

    }

    
    public function getAdresse()
    {
        return $this->adresse;
    }

    
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

    }

    
    public function getNumeroTel()
    {
        return $this->numeroTel;
    }

    
    public function setNumeroTel($numeroTel)
    {
        $this->numeroTel = $numeroTel;

    }

    
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

    }

    
    public function getNumeroPermis()
    {
        return $this->numeroPermis;
    }

    
    public function setNumeroPermis($numeroPermis)
    {
        $this->numeroPermis = $numeroPermis;

    }



    public static function getClients(){
        Model::Init(); // CONNEXION PDO GRACE AU REQUIRE PLUS HAUT
        $reqClients = Model::$pdo->query("SELECT * FROM clients"); // REQUETE POUR SELECT TOUT DE LA TABLE CLIENT
        $data = $reqClients->fetchAll(PDO::FETCH_OBJ); //RESULTAT DE LA REQ DANS UN TAB D'OBJ
        return $data; // RETURN LE TAB D'OBJ
    }

    public static function ajouterClients(){
        Model::Init();
        $reqAjouterClient=Model::$pdo->prepare('INSERT INTO clients(nom,prenom,adresse,numtel,datenaissance,numpermis) VALUES(:n,:p,:a,:numT,:d,:numP)');

        $nomF=$_POST['nom'];
        $prenomF=$_POST['prenom'];        // ON RECUP EN POST LES INFOS QU'ON VEUT AJOUTER
        $adresseF=$_POST['adresse'];
        $numeroTelF=$_POST['numeroTel'];
        $datenaissanceF=$_POST['datenaissance'];
        $numpermisF=(!empty($_POST['numpermis']))?$_POST['numpermis'] : 0 ;

        $reqAjouterClient->execute(array('n'=>$nomF,'p'=>$prenomF,'a'=>$adresseF, 'numT'=>$numeroTelF, 'd'=>$datenaissanceF, 'numP'=>$numpermisF));
        echo "<script>window.location.replace(\"gestionClients.php\")</script>";// REFRESH LA PAGE POUR ADMIRER L'AJOUT
    }


    public static function supprimerClients($id){
        Model::Init();
        Model::$pdo->exec("DELETE FROM clients WHERE id=$id");//SUPPR DE LA TABLE CLIENT OU L'ID=ID
        echo "<script>window.location.replace(\"gestionClients.php\")</script>";
    }
    

    public static function modifierClients($id){
        Model::Init();
        $reqModif=Model::$pdo->prepare("UPDATE clients SET nom=?,prenom=?,adresse=?,numtel=?,datenaissance=?,numpermis=? WHERE id=$id");
        $reqModif->execute(array($_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['numerot'], $_POST['datenaissance'], $_POST['nump']));
    }

    public static function afficherUnSeulClient($id){
        Model::Init();
        $reqClient = Model::$pdo->query("SELECT * FROM clients WHERE id=$id");
        $data = $reqClient->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    
}