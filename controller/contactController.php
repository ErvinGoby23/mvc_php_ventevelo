<?php

include_once("model/contactModel.php");


class contactController
{
    private $model;

    public function __construct()
    {
        $this->model = new contactModel();
    }

    public function getcontactController()
    {

        $nom = $_POST['nom'] ?? "";
        $prenom = $_POST['prenom'] ?? "";
        $email = $_POST['email'] ?? "";
        $message = $_POST['message'] ?? "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $result = $this->model->getcontactModel($nom, $prenom, $email, $message);

            if ($result) {
                echo "Données insérées avec succès.";
            } else {
                echo "Erreur lors de l'insertion des données.";
            }
        }

        include("view/contact.php");
    }
}


