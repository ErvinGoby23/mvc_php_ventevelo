<?php
include_once("Bdd.php");

class VeloModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

//liste de velo

    public function getveloModel()
    {
        return $this->bdd->query("SELECT * FROM velos ")->fetchAll(PDO::FETCH_ASSOC);
    }

//commander

    public function ajouterCommandeModel($idVelo, $nom, $prenom, $email, $message)
    {
        $query = "INSERT INTO commandes (id_velos, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->bdd->prepare($query);
        $stmt->bindParam(1, $idVelo, PDO::PARAM_INT);
        $stmt->bindParam(2, $nom, PDO::PARAM_STR);
        $stmt->bindParam(3, $prenom, PDO::PARAM_STR);
        $stmt->bindParam(4, $email, PDO::PARAM_STR);
        $stmt->bindParam(5, $message, PDO::PARAM_STR);
        $stmt->execute();
    }



//accueil 

    public function dernieraccueilModel()
    {
        $query = "SELECT * FROM velos ORDER BY id DESC LIMIT 1";
        $result = $this->bdd->query($query);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

//detail

    public function getVelosDetails($veloIds)
{
    $query = "SELECT * FROM velos WHERE id IN (" . implode(",", $veloIds) . ")";
    $stmt = $this->bdd->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    
}