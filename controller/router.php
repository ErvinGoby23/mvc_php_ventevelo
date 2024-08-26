<?php

    $page = "";
if (isset($_GET['page'])){
    $page = $_GET['page'];
} 


switch ($page) {
    case 'velo':
        include_once('veloController.php');
        $velo=new veloController();
        $velo->getveloController();
        break;

        case 'information':
            include_once('veloController.php');
            $velo = new VeloController();
            $velo->showVeloDetails();
            break;
        
        
        case 'contact':
            include_once('contactController.php');
            $contact=new contactController();
            $contact->getcontactController();  
            break;
            
   
        case 'commander':
            
            include_once('veloController.php');
            $velo=new veloController();
            $velos = $velo->getAllVelosController();
            
            break;
        
    
                    
        case 'accueil':
            include_once('veloController.php');
            $velo=new veloController();
            $velo->getAccueilController();
            break;
        

        default:
            include_once('veloController.php');

            $velo=new veloController();
            $velo->getAccueilController();
            break;

}