<?php
include_once("Bdd.php");

class contactModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }


    public function getcontactModel($nom,$prenom,$email,$message)
    {
        
        $contact= $this->bdd->prepare("INSERT INTO contact(nom,prenom,email,message) VALUES(?,?,?,?)");
        return $contact->execute([$nom,$prenom,$email,$message]);
    
    }
    
}