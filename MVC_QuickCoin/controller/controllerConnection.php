<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelAnnonceur.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelEtudiant.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelAdmin.php");
                  
 $pagetitle = "Connextion";	
 $view ="Connextion";
	
		if(isset($_REQUEST['E-mail']),&&(isset($_REQUEST['Mot de passe'])){

			$mail = $_REQUEST['Email']
			$mdp = $_REQUEST['Mot de passe'];

			$recherche=ModelEtudiant::select($IDE);
				if($recherche=null){
					$recherche2=ModelAnnonceur::select($IDA); 
				}else 
				if ($recherche2=null){
					$recherche3=ModelAdmin::select($IDAD);
				}else if ($recherche3=null){
					$pagetitle = "Erreur de connection";
					$view ="Erreur";
					require ("{$ROOT}{$DS}view{$DS}view.php");
					break;
				}else{
					header("location: index.php") /* Redirection du navigateur */
		             exit;
				}
			}
?>