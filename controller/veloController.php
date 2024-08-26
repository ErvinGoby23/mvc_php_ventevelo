<?php
include_once("model/veloModel.php");

class veloController
{
    private $model;

    public function __construct()
    {
        $this->model = new veloModel();
    }

//liste de velo
    public function getveloController()
    {
        $velo = $this->model->getveloModel();
        include("view/velo.php");
    }
//commander

    public function getAllVelosController(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idVelo = @$_POST['id_velos'];
        $nom = @$_POST['nom'];
        $prenom = @$_POST['prenom'];
        $email = @$_POST['email'];
        $message = @$_POST['message'];
        $this->model->ajouterCommandeModel($idVelo, $nom, $prenom, $email, $message);
        

    }
    $velos = $this->model->getveloModel();
    include("view/commander.php");

}

//accueil

        public function getAccueilController()
        {
            $lastVelo = $this->model->dernieraccueilModel();
            include("view/accueil.php");
        }

//detail 

            public function showVeloDetails()
            {
                $selectedVelos = array();
                if (isset($_GET['velo'])) {
                    $veloIds = explode(",", $_GET['velo']);
                    $selectedVelos = $this->model->getVelosDetails($veloIds);
                } else {
                    header('Location: ?page=erreur');
                    exit();
                }
                include("view/information.php");
            }




}

