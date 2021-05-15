<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelOffres.php"); 

if(isset($_REQUEST['action']))	
	$action = $_REQUEST['action'];
	else $action="Offres Mi Temps";	
	
switch ($action) {
    case "Offres Mi Temps":
        $pagetitle = "Liste des offres ";
        $view = "Offres Mi Temps";
       	$tab_u = ModelOffres::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "afficher_offre":	
		if(isset($_REQUEST['IDO'])){
			$IDE = $_REQUEST['IDO'];
			$u = ModelOffres::select($IDO);
				if($u!=null){
					$pagetitle = "Details de l'Offre";
					$view = "afficher_offre";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "supprimer":
		if(isset($_REQUEST['IDO'])){
			$IDE = $_REQUEST['IDO'];
			$del = ModelOffres::select($IDO);
			if($del!=null){
			$del->delete($IDO);
			header('Location: index.php?controller=Offres&action=afficher_tous');
			}
		 }
	    break;
		
	case "creer_offre":
		$pagetitle = "Enregistrer un Offre";
		$view = "creer_Offre";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "ajouter_offre":
		if( isset($_REQUEST['Offre de travaille']) && isset($_REQUEST['	Horaire'])&&(isset($_REQUEST['Salaire'])){
			
			
			$of = $_REQUEST["Offre de travaille"];
			$temps = $_REQUEST["Horaire"];
			$sal = $_REQUEST["Salaire"];
			
			
			$recherche = ModelOffres::select($IDO);
			if($recherche==null){
				$u = new ModelOffres($of, $temps,$sal);	
				$tab = array(
				
				"Offre de travaille" => $of,
				"horaire" => $temps,
				"salaire" => $sal
				
				);	

				$u->insert($tab);
				$pagetitle = "offre Enregistré";
				$view = "ajouter_offre";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	case "modifier":
		if(isset($_REQUEST['IDO'])){
			$IDE = $_REQUEST['IDO'];
			$up = ModelEtudiant::select($IDO);
			if($up!=null){
				$pagetitle = "Modifier l'Offre";
				$view = "modifier";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "mise_à_jour":
		if(isset($_REQUEST['Offre de travaille']) && isset($_REQUEST['	Horaire'])&&(isset($_REQUEST['Salaire'])){
			
			$tab = array(
   		
				"Offre de travaille" => $_REQUEST['Offre de travaille'],
				"Temps" => $_REQUEST['Horaire'],
				"Salaire" =>$_REQUEST['Salaire'],
				
   			 );
			$o = Modeloffre::select($IDO);
			if($o!=null){
				$u = $o->update($tab, $IDO);		
				$pagetitle = "offre modifié";
				$view = "mise_à_jour";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>