Structure du fichier
********************

index.php: 

	Point d'entrée de l'application. Il gère le routage et inclut les contrôleurs en conséquence.

	http://localhost/mvcexamen/index.php
	http://localhost/mvcexamen/index.php?page=accueil


controller/:  

	- de traiter les données et d'interagir avec les modèles.

	veloController.php: 
		- Gère l'affichage des vélos, des détails et des commandes.
		
	contactController.php: 
		- Gère les fonctionnalités liées aux contacts.

model/:

	- Contient les fichiers PHP chargés de gérer les requêtes, Contient les fichiers PHP définissant les modèles de données et les interactions avec la base de données.

	VeloModel.php: 
		Représente le modèle de données pour les vélos.
	
	Bdd.php: 
		Gère la connexion à la base de données.


view/: 

	- Contient les fichiers PHP responsables du rendu de la sortie HTML.

	velo.php: 
		Affiche une liste de vélos.
	commander.php: 
		Affiche la page de commande.
	accueil.php: 
		affiche la page d'accueil.
	information.php: 
		Affiche des informations détaillées sur un vélo.
	contact.php: 
		Fournit un formulaire de contact.

css/: 

	Contient un fichier CSS ( styles.css) avec les règles de style pour l'application.

BDD : mvcexamen\smarbike.sql (avec données des intialistion)

Listes des url's : 
******************

Accueil : 
	http://localhost/mvcexamen/index.php
	http://localhost/mvcexamen/index.php?page=accueil 

Velos :
	http://localhost/mvcexamen/index.php?page=velo
	
Commander :
	http://localhost/mvcexamen/index.php?page=commander	
	
Plus d'infos :
	http://localhost/mvcexamen/index.php?page=information&velo=2
		
Contact :
	http://localhost/mvcexamen/index.php?page=contact
