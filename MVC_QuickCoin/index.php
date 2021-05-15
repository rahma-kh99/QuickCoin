<?php

$ROOT = __DIR__;

$DS = DIRECTORY_SEPARATOR;

$controleur_default = "Offres" ;

if(!isset($_REQUEST['controller']))
				
				$controller=$controleur_default;
			else 
				
				$controller = $_REQUEST['controller'];

					
switch ($controller) {
			case "Admin" :
				require ("{$ROOT}{$DS}controller{$DS}controllerAdmin.php");
				break;
				
			case "Annonceur" :
				require ("{$ROOT}{$DS}controller{$DS}controllerAnnonceur.php");
				break;	
				
				case "Etudiant" :
				require ("{$ROOT}{$DS}controller{$DS}controllerEtudiant.php");
				break;	

				case "cantact" :
				require ("{$ROOT}{$DS}controller{$DS}controllerCantact.php");
				break;	
				case "accueil" :
				require ("{$ROOT}{$DS}controller{$DS}controllerAccueil.php");
				break;	
				case "apropos" :
				require ("{$ROOT}{$DS}controller{$DS}controllerApropos.php");
				break;	
				case "aide" :
				require ("{$ROOT}{$DS}controller{$DS}controllerAide.php");
				break;	
			case "default" :
				require ("{$ROOT}{$DS}controller{$DS}controllerOffers.php");
				break;
}
?>