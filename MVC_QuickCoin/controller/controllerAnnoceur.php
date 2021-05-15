<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelAnnonceur.php"); 
 


if(isset($_REQUEST['action']))	

	$action = $_REQUEST['action'];

	else $action="inscritAnnonceur";	
	
switch ($action) {
	case "inscritAnnonceur":
        $pagetitle = "Inscription";
        $view = "inscritAnnonceur";
        require ("{$ROOT}{$DS}view{$DS}view.php");

    case "afficher_tous":
        $pagetitle = "Liste des annonceurs";
        $view = "afficher_tous";
       	$tab_u = ModelAnnonceur::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");

	case "afficher_annonceur":	
		if(isset($_REQUEST['IDA'])){
			$IDA = $_REQUEST['IDA'];
			$u = ModelAnnonceur::select($IDA);
				if($u!=null){
					$pagetitle = "Details de l'annonceur";
					$view = "afficher_annonceur";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "supprimer":
		if(isset($_REQUEST['IDA'])){
			$ncin = $_REQUEST['IDA'];
			$del = ModelAnnonceur::select($IDA);
			if($del!=null){
			$del->delete($IDA);
			header('Location: index.php?controller=Annonceur&action=afficher_tous');
			}
		}
	    break;
		
	case "creer_annonceur":
		$pagetitle = "Enregistrer un Annonceur";
		$view = "creer_annonceur";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "ajouter_annonceur":
		if( isset($_REQUEST['Nom']) && isset($_REQUEST['	Prenom']) && isset($_REQUEST['@mail']) && isset($_REQUEST['Mdp']) && isset($_REQUEST['Ville'])){
		
			$n = $_REQUEST["Nom"];
			$p = $_REQUEST["Prenom"];
			$m = $_REQUEST["@mail"];
			$md = $_REQUEST["Mdp"];
			$v = $_REQUEST["Ville"];

			$recherche = ModelAnnonceur::select($IDA);
			if($recherche==null){
				$u = new ModelAnnonceur($n, $p, $m, $md, $v);	
				$tab = array(
				"nom" => $n,
				"prenom" => $p,
				"adress mail" => $m,
				"mot de passe " => $md,
				"ville" => $v
				);				
				$u->insert($tab);
				$pagetitle = "Annonceur Enregistré";
				$view = "ajouter_annonceur";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	case "modifier":
		if(isset($_REQUEST['IDA'])){
			$IDA = $_REQUEST['IDA'];
			$up = ModelAnnonceur::select($IDA);
			if($up!=null){
				$pagetitle = "Modifier l'Annonceur";
				$view = "modifier";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "mise_à_jour":
		if( isset($_REQUEST['Nom']) && isset($_REQUEST['	Prenom']) && isset($_REQUEST['@mail']) && isset($_REQUEST['Mdp']) && isset($_REQUEST['Ville'])){
		
			$tab = array(
   			
   			    "Nom" => $_REQUEST['Nom'],
				"prenom" => $_REQUEST['Prenom'],
				"@mail" =>$_REQUEST['@mail'],
				"Mdp" => $_REQUEST['Mdp'],
				"Ville" => $_REQUEST['Ville']
   			 );
			$o = ModelAnnonceur::select($IDA);
			if($o!=null){
				$u = $o->update($tab, $IDA);		
				$pagetitle = "Annonceur modifié";
				$view = "mise_à_jour";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
    
}
?>
