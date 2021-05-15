<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelEtudiant.php"); 

if(isset($_REQUEST['action']))	
	$action = $_REQUEST['action'];
	else $action="inscritEtudiant";	
	
switch ($action) {

    case "inscritEtudiant":
        $pagetitle = "Inscription";
        $view = "inscritEtudiant";
        require ("{$ROOT}{$DS}view{$DS}view.php");

    case "afficher_tous":
        $pagetitle = "Liste des Etudiants  ";
        $view = "afficher_tous";
       	$tab_u = ModelEtudiant::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "afficher_etudiant":	
		if(isset($_REQUEST['IDE'])){
			$IDE = $_REQUEST['IDE'];
			$u = ModelEtudiant::select($IDE);
				if($u!=null){
					$pagetitle = "Details de l'étudiant";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "supprimer":
		if(isset($_REQUEST['IDE'])){
			$IDE = $_REQUEST['IDE'];
			$del = ModelUtilisateur::select($IDE);
			if($del!=null){
			$del->delete($IDE);
			header('Location: index.php?controller=etudiant&action=afficher_tous');
			}
		 }
	    break;
		
	case "creer_etudiant":
		$pagetitle = "Enregistrer un Etudiant";
		$view = "creer_etudiant";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "ajouter_etudiant":
		if( isset($_REQUEST['Nom']) && isset($_REQUEST['Prenom'])&&(isset($_REQUEST['@mail'])&&
			(isset($_REQUEST['Mdp'])&&(isset($_REQUEST['Ville'])&&(isset($_REQUEST['Universite'])&&(isset($_REQUEST['Genre'])){
			
			
			$Nom = $_REQUEST["Nom"];
			$Prenom = $_REQUEST["Prenom"];
			$mail = $_REQUEST["@mail"];
			$Mdp = $_REQUEST["Mdp"];
			$Ville= $_REQUEST["Ville"];
			$univer = $_REQUEST["Universite"];
			$Genre = $_REQUEST["Genre"];
			
			$recherche = ModelEtudiant::select($IDE);
			if($recherche==null){
				$u = new ModelEtudiant($Nom, $Prenom,$mail, $Mdp,$Ville,$univer,$Genre);	
				$tab = array(
				
				"Nom" => $Nom,
				"prenom" => $Prenom,
				"@mail" => $mail,
				"Mdp" => $Mdp,
				"Ville" => $Ville,
				"Universite" => $univer,
				"Genre" => $Genre
				);	

				$u->insert($tab);
				$pagetitle = "Etudiant Enregistré";
				$view = "ajouter_etudiant";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	case "modifier":
		if(isset($_REQUEST['IDE'])){
			$IDE = $_REQUEST['IDE'];
			$up = ModelEtudiant::select($IDE);
			if($up!=null){
				$pagetitle = "Modifier l'Etudiant";
				$view = "modifier";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "mise_à_jour":
		if(isset($_REQUEST['Nom']) && isset($_REQUEST['Prenom'])&&(isset($_REQUEST['@mail'])&&
			(isset($_REQUEST['Mdp'])&&(isset($_REQUEST['Ville'])&&(isset($_REQUEST['Universite'])&&(isset($_REQUEST['Genre'])){
			
			$tab = array(
   		
				"Nom" => $_REQUEST['Nom'],
				"prenom" => $_REQUEST['Prenom'],
				"@mail" =>$_REQUEST['@mail'],
				"Mdp" => $_REQUEST['Mdp'],
				"Ville" => $_REQUEST['Ville'],
				"Universite" => $_REQUEST['Universite'],
				"Genre" => $_REQUEST['Genre']
   			 );
			$o = ModelEtudiant::select($IDE);
			if($o!=null){
				$u = $o->update($tab, $IDE);		
				$pagetitle = "Etudiant modifié";
				$view = "mise_à_jour";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>